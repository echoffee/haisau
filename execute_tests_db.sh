for f in tests/db/*.py; do
    if python "$f"; then
        echo "Success."
    else
        echo "Test failed, aborting."
        exit 1
    fi
done

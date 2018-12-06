module.exports = {
    'Project Deletion' : function (client) {
        client
            .url("http://webserver:80/index.php")
            .pause(1000)
            .setValue("input[name='username']", "TestUser")
            .setValue("input[name='password']", "KaedeTakagaki")
            .click("button[name='login_user']")
            .pause(1000)
            .url("http://webserver:80/projectList.php")
            .waitForElementVisible("body", 1000)
            .assert.elementPresent("button[name='deleteProjectT7DummyProject']")
            .click("button[name='deleteProjectT7DummyProject']")
            .pause(100)
            .dismissAlert()
            .assert.elementPresent("a[name='T7DummyProject']")
            .click("button[name='deleteProjectT7DummyProject']")
            .pause(100)
            .acceptAlert()
            .pause(1000)
            .assert.urlContains("projectList.php")
            .assert.elementNotPresent("a[name='T7DummyProject']")
            .end();
    }
};

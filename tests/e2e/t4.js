module.exports = {
    'Project List Navigation' : function (client) {
        client
            .url("http://webserver:80/projectList.php")
            .waitForElementVisible("body", 1000)
            .assert.elementPresent("th[name='ProjectNameHead']")
            .assert.elementPresent("th[name='SprintNameHead']")
            .assert.elementPresent("th[name='ProgressHead']")
            .assert.elementPresent("th[name='SprintDateEndHead']")
            //Idk how to test the order of the project listing, sry
            .assert.elementPresent("a[name='T4DummyProject'][href*='projectDetails']")
            .click("a[name='T4DummyProject'][href*='projectDetails']")
            .pause(1000)
            .assert.containsText("h1", "T4DummyProject");
            client.end();
    }
};

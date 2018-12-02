module.exports = {
    'Create Project' : function (client) {
        client
            .url("http://webserver:80/index.php")
            .pause(1000)
            .setValue("input[name='username']", "TestUser")
            .setValue("input[name='password']", "KaedeTakagaki")
            .click("button[name='login_user']")
            .pause(1000)
            .url("http://webserver:80/createProject.php")
            .waitForElementVisible("body", 1000)
            .assert.title("Project Creation")
            .setValue("input[name='projectName']", 'DummyProjectName')
            .setValue("input[name='sprintDuration']", 42)
            .assert.elementPresent("input[id='bCreate']")
            .click("input[id='bCreate']")
            .pause(1000)
            .assert.title("Project List")
            .assert.containsText("a[name*='DummyProjectName']", "DummyProjectName")
            .url("http://webserver:80/createProject.php")
            .waitForElementVisible("body", 1000)
            .setValue("input[name='projectName']", "DummyProjectName")
            .click("input[id='bCreate']")
            .pause(1000)
            .assert.containsText("body", "error")
            .assert.containsText("a", "Go back")
            .click("a")
            .pause(1000)
            .assert.urlContains("createProject.php")
            .end();
    }
};

module.exports = {
    'Create Project' : function (client) {
        client
            .url("http://webserver:80/createProject.php")
            .waitForElementVisible("body", 1000)
            .setValue("input[name='projectName']", 'DummyProjectName')
            .setValue("input[name='sprintDuration']", 42)
            .waitForElementVisible("input[id='bCreate']", 1000)
            .click("input[id='bCreate']")
            .pause(1000)
            .assert.title("Project List")
            .assert.elementPresent("a", "DummyProjectName")
            .end();
    }
};

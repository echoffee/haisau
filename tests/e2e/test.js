module.exports = {
    'Demo test' : function (client) {
        client
            .url("http://webserver:80/createProject.php")
            .waitForElementVisible("body", 1000)
            .setValue("input[name='projectName']", 'TestJS1')
            .setValue("input[name='sprintDuration']", 42)
            .waitForElementVisible("input[id='bCreate']", 1000)
            .click("input[id='bCreate']")
            .pause(1000)
            .assert.title("Project List")
            .assert.elementPresent("a", "TestJS1")
            .end();
    }
};

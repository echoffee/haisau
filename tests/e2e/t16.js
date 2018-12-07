module.exports = {
    'Sprint Creation' : function (client) {
        client
            .url("http://webserver:80/index.php")
            .pause(1000)
            .setValue("input[name='username']", "TestUser")
            .setValue("input[name='password']", "KaedeTakagaki")
            .click("button[name='login_user']")
            .pause(1000)
            .url("http://webserver:80/projectList.php")
            .waitForElementVisible("body", 1000)
            .assert.elementPresent("a[name='T16DummyProject']")
            .click("a[name='T16DummyProject']")
            .pause(1000)
            .assert.elementPresent("a[name='sprints']")
            .click("a[name='sprints']")
            .pause(1000)
            .assert.urlContains("sprintList.php")
            .assert.elementPresent("button[name='new-sprint']")
            .click("button[name='new-sprint']")
            .pause(1000)
            .assert.elementPresent("input[name='sprintName']")
            .setValue("input[name='sprintName']", "T16DummySprint")
            .click("input[id='bCreate']")
            .pause(1000)
            .assert.elementPresent('th[name="sprintT16DummySprint"]')
            .click("button[name='new-sprint']")
            .assert.elementPresent('a[name="cancel"]')
            .click('a[name="cancel"]')
            .assert.urlContains("sprintList.php")
            .end();
    }
};

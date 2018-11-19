module.exports = {
    'Register User' : function (client) {
        client
            .url("http://webserver:80/index.php")
            .waitForElementVisible("body", 1000)
            .assert.elementPresent("a[href*='register.php']")
            .click("a[href*='register.php']")
            .pause(1000)
            .assert.title("Register")
            .assert.elementPresent("input[name='email-address']")
            .assert.elementPresent("input[name='username']")
            .assert.elementPresent("input[name='password']")
            .assert.elementPresent("button[name='create_user']")
            .setValue("input[name='email-address']", "user@bidoof.nico")
            .setValue("input[name='username']", "kaede")
            .setValue("input[name='password']", "takagaki")
            .click("button[name='create_user']")
            .pause(1000)
            .assert.containsText("body", "successfully")
            .url("http://webserver:80/register.php")
            .pause(1000)
            .assert.elementPresent("a[href*='index.php']")
            .click("a[href*='index.php']")
            .pause(1000)
            .assert.title("Login")
            .url("http://webserver:80/register.php")
            .pause(1000)
            .setValue("input[name='username']", "kaede")
            .setValue("input[name='password']", "takagaki")
            .click("button[name='create_user']")
            .pause(1000)
            .assert.containsText("body", "Error")
            .assert.elementPresent("a[href='index.php']")
            .url("http://webserver:80/register.php")
            .pause(1000)
            .setValue("input[name='email-address']", "user@bidoof.nico")
            .setValue("input[name='password']", "takagaki")
            .click("button[name='create_user']")
            .pause(1000)
            .assert.containsText("body", "Error")
            .assert.elementPresent("a[href='index.php']")
             .url("http://webserver:80/register.php")
            .pause(1000)
            .setValue("input[name='username']", "kaede")
            .setValue("input[name='email-address']", "user@bidoof.nico")
            .click("button[name='create_user']")
            .pause(1000)
            .assert.containsText("body", "Error")
            .assert.elementPresent("a[href='index.php']") 
            .end();
    }
};
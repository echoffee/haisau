import sys
import time
from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
from selenium.webdriver.common.desired_capabilities import DesiredCapabilities
from selenium.webdriver.common.keys import Keys
import mysql.connector
from mysql.connector import errorcode


# clean table
mydb = mysql.connector.connect(
    host="localhost",
    user="root",
    passwd="root",
    database="haisau"
)

c = mydb.cursor()
sql = "DELETE FROM Projet WHERE 1"
c.execute(sql)
br = ""
options = webdriver.ChromeOptions()
options.add_argument('--headless')
options.add_argument('proxy=null')
br = webdriver.Remote(command_executor='http://127.0.0.1:4444/wd/hub', desired_capabilities=options.to_capabilities())
br.get("http://webserver:80/createProject.php")
iProjectName = br.find_element_by_name("projectName")
iProjectName.clear()
iProjectName.send_keys("NewProjectNameTest")
iSprintDuration = br.find_element_by_name("sprintDuration")
iSprintDuration.clear()
iSprintDuration.send_keys(42)
bCreate = br.find_element(By.ID, "bCreate")
print("element found")
time.sleep(1)
print("clicking")
bCreate.send_keys(Keys.RETURN)
print("clicked")
time.sleep(1)
print(br.page_source)
assert "successfully" in br.page_source
br.quit()

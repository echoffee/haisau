import mysql.connector
import sys

mydb = mysql.connector.connect(
    host="localhost",
    user="root",
    passwd="root",
    database="haisau"
)

print(mydb)
c = mydb.cursor()
tables = ["Utilisateur", "Projet", "Travailler", "Sprint", "UserStory", "Tache"]
sql = "SELECT * FROM "
for n in tables :
    c.execute(sql + n)
    res = c.fetchall()

# Dummy entries
sql_iUtilisateur1 = "(1, 'loginUser', 'passwordUser', 'user1@haisau.net')"
sql_iUtilisateur2 = "(2, 'loginUser', 'passwordUser')"
sql_iUtilisateur3 = "(3, 'loginUser', 'passwordUser')"
sql_iUtilisateur4 = "(4, 'loginUser', 'passwordUser')"

sql = "INSERT INTO Utilisateur (idUtilisateur, login, password, mail) VALUES " + sql_iUtilisateur1
c.execute(sql)
mydb.commit()
sql = "INSERT INTO Utilisateur (idUtilisateur, login, password) VALUES " + sql_iUtilisateur2
c.execute(sql)
mydb.commit()
try:
    sql = "INSERT INTO Utilisateur (idUtilisateur, login, mail) VALUES " + sql_iUtilisateur2
    mydb.commit()
    print("Wrong entry didn't trigger error : " + sql)
    sys.exit(1)
except mysql.connector.Error as err:
    print(format(err))

sql = "INSERT INTO Utilisateur (idUtilisateur, password, mail) VALUES " + sql_iUtilisateur2


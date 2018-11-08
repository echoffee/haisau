import mysql.connector
from mysql.connector import errorcode
import sys

def test_correct_insert(table, params, values):
    sql = "INSERT INTO " + table + " ("
    first_comma = True
    for p in params:
        if (not first_comma):
            sql = sql + ", "
        sql = sql + p
        first_comma = False
    sql = sql + ") VALUES ("
    first_comma = True
    for p in params:
        if (not first_comma):
            sql = sql + ", "
        sql = sql + "%s"
        first_comma = False
    sql = sql + ")"
    c.execute(sql, values)
    mydb.commit()

def test_incorrect_insert(table, params, values):
    try:
        test_correct_insert(table, params, values)
        print("Wrong entry didn't trigger error : INSERT INTO " + table + " (" + ") VALUES " + values)
        sys.exit(1)
    except mysql.connector.Error as err:
        print("Error ok : " + format(err))



mydb = mysql.connector.connect(
    host="localhost",
    user="root",
    passwd="root",
    database="haisau"
)

c = mydb.cursor()

# Test each table's existence and clean them
tables = ["Utilisateur", "Projet", "Travailler", "Sprint", "UserStory", "Tache"]
sql = "SELECT * FROM "
for n in tables :
    c.execute(sql + n)
    res = c.fetchall()
    sql2 = "DELETE FROM " + n + " WHERE 1"
    c.execute(sql2)

# Dummy entries
sql_iUtilisateur1 = (1, 'loginUser', 'passwordUser', 'user1@haisau.net')
sql_iUtilisateur2 = (2, 'loginUser', 'passwordUser')
sql_iUtilisateur3 = (3, 'loginUser', 'user3@haisau.net')
sql_iUtilisateur4 = (4, 'passwordUser', 'user4@haisau.net')

test_correct_insert("Utilisateur", ["idUtilisateur", "login", "password", "mail"], sql_iUtilisateur1)
test_correct_insert("Utilisateur", ["idUtilisateur", "login", "password"], sql_iUtilisateur2)
test_incorrect_insert("Utilisateur", ["idUtilisateur", "login", "mail"], sql_iUtilisateur3)
test_incorrect_insert("Utilisateur", ["idUtilisateur", "password", "mail"], sql_iUtilisateur4)

sql_iUtilisateurN = ('loginUser', 'passwordUser', 'userN@haisau.net')
for i in range(10):
    test_correct_insert("Utilisateur", ["login", "password", "mail"], sql_iUtilisateurN)


################
sql_iProjet1 = (1, 'projectName', 2)
sql_iProjet2 = (2, 'projectName')
sql_iProjet3 = (3, 2)
sql_iProjetN = ('projectName', 2)
test_correct_insert("Projet", ["idProjet", "nom", "dureeSprint"], sql_iProjet1)
test_correct_insert("Projet", ["idProjet", "nom"], sql_iProjet2)
test_incorrect_insert("Projet", ["idProjet", "dureeSprint"], sql_iProjet3)
for i in range(10):
    test_correct_insert("Projet", ["nom", "dureeSprint"], sql_iProjetN)

################
sql_iTravailler1 = (1, 1, 2)
sql_iTravailler2 = (1, 1)
sql_iTravailler3 = (1, 2)
sql_iTravaillerN = (1, 2)
test_correct_insert("Travailler", ["idTravailler", "idUtilisateur", "idProjet"], sql_iTravailler1)
test_incorrect_insert("Travailler", ["idTravailler", "idUtilisateur"], sql_iTravailler2)
test_incorrect_insert("Travailler", ["idTravailler", "idProjet"], sql_iTravailler3)
for i in range(10):
    test_correct_insert("Travailler", ["idUtilisateur", "idProjet"], sql_iTravaillerN)

#################
# TBC ###########
#################

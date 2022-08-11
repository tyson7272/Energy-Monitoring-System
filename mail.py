import smtplib
import random
import mysql.connector
from datetime import datetime
import sys
num=random.randint(100000,999999)
now = datetime.now()
conn = mysql.connector.connect(
   user='root', password='', host='localhost', database='session')
cursor = conn.cursor()
select_stmt = (
"""SELECT * FROM users WHERE username {}""".format(sys.argv[1])
)
cursor.execute(select_stmt)
records = cursor.fetchone()
conn.close()

insert_stmt = (
   "INSERT INTO otp_expiry(otp,is_expired,create_at)"
   "VALUES (%s, %s,%s)"
)
data = (num, '0',now)
cursor.execute(insert_stmt, data)
print(cursor.rowcount)
conn.commit()
conn.close()
subject="OTP for pass reset"
msg="Subject: {}\n\n{}".format(subject,str(num))

s = smtplib.SMTP('smtp.gmail.com', 587)
s.starttls()
s.login("smartdwelltech@gmail.com", "rbxlhcihbxhmfpfr")
s.sendmail("smartdwelltech@gmail.com", str(records), msg)
s.quit()
import datetime
from time import sleep
from datetime import datetime
from datetime import timedelta
from DeviceScheduleFunctions import *

check_interval_seconds, check_interval_minutes, check_interval_hours = 5, 0 , 0

now = datetime.now()+ timedelta(seconds=check_interval_seconds, minutes=check_interval_minutes, hours=check_interval_hours)

check_time = now.strftime("%H:%M:%S") 
# check_time = now.strftime("%H:%M:%S") 

print("Check Time =", check_time)

#Our logic should be 
#Start by getting each of the devices 
#foreach of the devices go and define the control pins and their next action time
# then go and actually fetch it and do some updates
devices = GetTankDevices()
for device in devices :
  for  label, value in device.items():
    print(label+': '+value)
  print("Device Added to Definition")
  print("\r\n")


while True:
  # print("\r\n")
  print("~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~")
  now = datetime.now()
  current_time = now.strftime("%H:%M:%S")
  print("Current Time =", current_time)
  print("Check Time =", check_time)
  # print()
  if(check_time <= current_time):
    print("time has passed")
    now = datetime.now()+ timedelta(seconds=check_interval_seconds, minutes=check_interval_minutes, hours=check_interval_hours)
    check_time = now.strftime("%H:%M:%S") 
    print("New Check Time =", check_time)
    for device in devices :
      # print(device['DeviceId'])
      schedule = GetNextDeviceSchedule(device['DeviceId'])
      print(schedule)
      print("Checked Device for schedule update")


  sleep(5)

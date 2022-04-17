def b():
  # Something
  return 1

def c():
  # Something
  return 2

def GetTankDevices():
  # Something
  import requests
  import json
  response = requests.get("http://localhost/FinTech/public/TankDevices/GetTankDevices").json()
  return response

def GetNextDeviceSchedule(DeviceId):
  # Something
  import requests
  import json
  response = requests.get("http://localhost/FinTech/public/TankDevices/GetNextDeviceSchedule/"+DeviceId).json()
  return response




# users = { 0 : {'Name': 'Hans', 'Age': '27', 'Birthplace': 'Germany'},
#         1 : {'Name': 'Steve', 'Age': '44', 'Birthplace': 'England'},
#         3 : {'Name': 'Mike', 'Age': '24', 'Birthplace': 'Spain'},  }

# for id, userdata in users.items():
#     for label, value in userdata.items():
#         print(label+': '+value)
#     print("\r")
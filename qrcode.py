#Install QR Code
#install Python 64bit
# pip install pip
# pip install pyqrcode

import pyqrcode 
from pyqrcode import QRCode 
  

  
# String which represent the QR code 
s = input("Enter Value : ")
img = input("Enter File Name :")
  
# Generate QR code 
url = pyqrcode.create(s) 
  
# Create and save the png file naming "myqr.png" 
url.svg(img+".svg" , scale = 8) 
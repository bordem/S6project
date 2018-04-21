#! /usr/bin python
from LSBSteg import LSBSteg
import cv2.cv as cv

str = "MaFromagerie{Y0u_re_g00d_in_SteGan0}" #Message a cacher
carrier = cv.LoadImage("img/fromagerie.jpg") #Image dans laquel on va cacher le message
steg = LSBSteg(carrier)
steg.hideText(str)
steg.saveImage("from.jpg") #Image qui contient le message

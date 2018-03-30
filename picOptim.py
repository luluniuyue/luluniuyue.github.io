from PIL import Image
from os import walk
import os
from datetime import datetime
import time

def optimize(inputPic,outPic,heigh,outPath):
    #im = Image.open("optimized.jpg")
    im = Image.open(inputPic)
    (x,y) = im.size
    if x>600 :
        ratio =  x/heigh
    else:
        ratio = 1
    size=(heigh,y*ratio)
    im.thumbnail(size)
    if not os.path.exists(outPath):
        os.makedirs(outPath)
    im.save(outPic, optimize=True)




def  getFiles(path):
    print path
    f=[]
    for (dirpath, dirnames, filenames) in walk(path):
        for filename in filenames:
            if 'jpg' in  filename.lower() or 'png' in filename:
                f.append(filename)
                print filename
    return f

def main(inputPath,outputPath,heigh):
    fileNames = getFiles(inputPath)
    if fileNames!="":
        i=1
        for f in fileNames :
            i=i+1
            optimize(inputPath+f,outputPath+str(int(time.time()))+str(i)+".png",heigh,outputPath)



if __name__ == '__main__':
    inputPath ="./daigou/"
    outputPath = "./daigou_opt/"
    main(inputPath,outputPath,600)


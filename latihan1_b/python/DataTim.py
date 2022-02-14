class DataTim():

    #private atribute
    __namaTim = ""
    __negaraAsal = ""
    __tahunBerdiri = ""

    def __init__(self, nt="", na="", tb=0):
        self.__namaTim = nt
        self.__negaraAsal = na
        self.__tahunBerdiri = tb
    
    def setNamaTim(self, nt):
        self.__namaTim = nt

    def getNamaTim(self):
        return self.__namaTim
    
    def setNegaraAsal(self, na):
        self.__negaraAsal = na

    def getNegaraAsal(self):
        return self.__negaraAsal

    def setTahunBerdiri(self, tb):
        self.__tahunBerdiri = tb
    
    def getTahunBerdiri(self):
        return self.__tahunBerdiri
    
    
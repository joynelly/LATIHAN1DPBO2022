class DataTim():

    #private atribute
    __namaTim = ""
    __negaraAsal = ""
    __tahunBerdiri = ""

    # constructor
    def __init__(self, nt="", na="", tb=0):
        self.__namaTim = nt
        self.__negaraAsal = na
        self.__tahunBerdiri = tb
        self.DaftarPemain = self.DataPemain()
    
    # Membuat set dan get untuk setiap variable
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

    def setPemain(self, np):
        self.DaftarPemain.setNamaPemain(np)

    def setJumlahPemain(self, jp):
        self.DaftarPemain.setJumlah(jp)

    # Menampilkan data Tim termasuk nama pemain
    def showDataTim(self):
        print("\n>> " + str(self.__namaTim) + " <<")
        print("Negara Asal   : " + str(self.__negaraAsal))
        print("Tahun Berdiri : " + str(self.__tahunBerdiri))
        print("Daftar Pemain :")
        self.DaftarPemain.showDataPemain()
    
    # inner class
    class DataPemain():
        #private atribute
        namaPemain = []
        jumlah = 0

        # constructor
        def __init__(self):
            self.namaPemain = []
            self.jumlah = 0
        
        def setNamaPemain(self, np):
            self.namaPemain.append(np)

        def setJumlah(self, jp):
            self.jumlah = jp
        
        # menampilkan nama setiap pemain
        def showDataPemain(self):
            i = 0
            for i in range(self.jumlah):
                print("   " + str(i+1) + ". " + str(self.namaPemain[i]))

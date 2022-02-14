from DataTim import DataTim

print("\nLATIHAN 1b DPBO - DATA TIM SEPAKBOLA")
print("====================================")

# Meminta inputan jumlah Data tim
print("Masukkan Jumlah Tim yang mau di input : ")
n = int(input())

# Deklarasi dan instansiasi objek
arrayTim = [DataTim() for i in range(n)]
i = 0

# Perulangan meminta inputan objek DataTim
for i in range(n):
    # Meminta data Tim
    print("\nMasukkan data Tim", (i+1))
    namaTim = input("Nama Tim : ")
    negaraAsal = input("Negara Asal : ")
    tahunBerdiri = input("Tahun Berdiri : ")

    # Memasukkan data kedalam objek DataTim
    arrayTim[i].setNamaTim(namaTim)
    arrayTim[i].setNegaraAsal(negaraAsal)
    arrayTim[i].setTahunBerdiri(tahunBerdiri)

    # Meminta inputan daftar Pemain
    m = int(input("Jumlah pemain : "))
    arrayTim[i].DaftarPemain.setJumlah(m)

    # perulangan inputan nama pemain
    j = 0
    for j in range(m):
        print("   ", (j+1), end="")
        namaPemain = input(". ")
        arrayTim[i].DaftarPemain.setNamaPemain(namaPemain)
    
# Perulangan menampilkan hasil inputan
print("\n=================================")
print("DATA TIM SEPAKBOLA YANG TERDAFTAR")
print("=================================")
i = 0
for i in range(n):
    # Menampilkan data tim menggunakan method dalam class
    arrayTim[i].showDataTim()


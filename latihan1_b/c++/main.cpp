#include "DataTim.cpp"

int main() {

    //membuat variabel tampungan
    int i, j, n, m;
    string namaTim;
    string negaraAsal;
    string namaPemain;
    int tahun;

    cout<<"\nLATIHAN 1b DPBO - DATA TIM SEPAKBOLA"<< endl;
    cout<<"===================================="<< endl;

    //meminta masukan awal jumlah tim
    cout<<"Masukkan Jumlah Tim yang mau di input :"<< endl;
    cin>>n;

    //Membuat array class dataTim
    DataTim arrayTim[n];

    //perulangan untuk menginput data tim
    for (i = 0; i < n; i++)
    {
        /* meminta input data tim */
        cout << "\nMasukkan data Tim " << (i+1) << endl;
        cout << "Nama Tim : ";
        cin >> namaTim;
        cout << "Negara Asal : ";
        cin >> negaraAsal;
        cout << "Tahun Berdiri : ";
        cin >> tahun;

        //mengisi (set) data tim kedalam class
        arrayTim[i].setNamaTim(namaTim);
        arrayTim[i].setNegaraAsal(negaraAsal);
        arrayTim[i].setTahunBerdiri(tahun);

        // meminta inputan data pemain
        cout << "Jumlah Pemain : ";
        cin >> m;
        arrayTim[i].setJumlahPemain(m);
        
        //perulangan meminta nama pemain
        for (j = 0; j < m; j++)
        {
            /* meminta input nama pemain */
            cout << "   " << (j+1) << ". ";
            cin >> namaPemain;
            arrayTim[i].setPemain(j, namaPemain);
        }
    }
    
    //Perulangan Menampilkan hasil dataTim
    cout << "\n=================================" << endl;
    cout << "DATA TIM SEPAKBOLA YANG TERDAFTAR" << endl;
    cout << "=================================" << endl;
    for (i = 0; i < n; i++)
    {
        /* menampilkan data tim menggunakan method pada class */
        arrayTim[i].showTim();
    }

    return 0;
}
#include <iostream>
#include <string>

using namespace std;

class DataTim
{
    private:
        /* atribut private data Tim Sepakbola */
        string namaTim;
        string negaraAsal;
        int tahunBerdiri;

        // objek yang menyimpan data pemain
        class DataPemain
        {
            private:
                /* atribut private */
                string namaPemain[50];
                int jumlahPemain;
            public:
                DataPemain(){}

                DataPemain(int pointer, string np){
                    namaPemain[pointer] = np;
                }

                void setNamaPemain(int pointer, string np){
                    namaPemain[pointer] = np;
                }

                string getNamaPemain(int pointer){
                    return namaPemain[pointer];
                }

                void setJumlah(int jp){
                    jumlahPemain = jp;
                }

                int getJumlah(){
                    return jumlahPemain;
                }

                void showPemain(){
                    int i;
                    for (i = 0; i < jumlahPemain; i++)
                    {
                        /* code */
                        cout << "   " << (i+1) << ". " << namaPemain[i] << endl;
                    }
                }

                ~DataPemain(){}
        };

        // deklarasi objek dataPemain
        DataPemain listPemain;

    public:
        /* constructor */
        DataTim() {
        }

        /* constructor yang menggunakan parameter */
        DataTim(string nt, string na, int tb){
            /* mengisi class dataTim*/
            namaTim = nt;
            negaraAsal = na;
            tahunBerdiri = tb;
        }

        /* membuat getter dan setter untuk setiap variabel */

        void setNamaTim(string nt){
            namaTim = nt;
        }

        string getNamaTim(){
            return namaTim;
        }

        void setNegaraAsal(string na){
            negaraAsal = na;
        }

        string getNegaraAsal(){
            return negaraAsal;
        }

        void setTahunBerdiri(int tb){
            tahunBerdiri = tb;
        }

        int getTahunBerdiri(){
            return tahunBerdiri;
        }

        void setPemain(int pointer, string np){
            listPemain.setNamaPemain(pointer, np);
        }

        void setJumlahPemain(int jp){
            listPemain.setJumlah(jp);
        }

        void showTim(){
            cout << "\n>> " << namaTim << " <<" << endl;
            cout << "Negara Asal : " << negaraAsal << endl;
            cout << "Tahun Berdiri : " << tahunBerdiri << endl;
            cout << "Daftar Pemain :" << endl;
            listPemain.showPemain(); 
        }

        /* destructor */
        ~DataTim(){}
};
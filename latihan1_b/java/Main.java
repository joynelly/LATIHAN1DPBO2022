import java.util.*;

public class Main {
    public static void main(String[] args) {
        
        // membuat variabel tampungan
        int i, j, n, m;
        String namaTim;
        String namaPemain;
        String negaraAsal;
        int tahun;

        System.out.println("\nLATIHAN 1b DPBO - DAFTAR TIM SEPAKBOLA");
        System.out.println("======================================");

        //membuat inputan jumlah tim
        Scanner sc  = new Scanner(System.in);
        System.out.println("Masukkan jumlah tim yang mau di input");
        n = sc.nextInt();

        //mengalokasikan objek tim
        DataTim arrayTim[] = new DataTim[n];

        //perulangan untuk menginput data tim
        i = 0;
        for (i = 0; i < n; i++) {
            System.out.println("\nMasukkan data Tim " + (i+1));
            System.out.print("Nama Tim : ");
            namaTim = sc.next();
            System.out.print("Negara Asal : ");
            negaraAsal = sc.next();
            System.out.print("Tahun Berdiri : ");
            tahun = sc.nextInt();
            
            //memasukkan data tim kedalam array class
            arrayTim[i] = new DataTim(namaTim, negaraAsal, tahun);
            arrayTim[i].setNamaTim(namaTim);
            arrayTim[i].setNegaraAsal(negaraAsal);
            arrayTim[i].setTahunBerdiri(tahun);

            //inputan jumlah pemain dan set kedalam class
            System.out.print("Jumlah Pemain : ");
            m = sc.nextInt();
            arrayTim[i].setJumlahPemain(m);
            
            //perulangan untuk inputan pemain
            j = 0;
            for (j = 0; j < m; j++) {
                System.out.print("   " + (j+1) + ". ");
                namaPemain = sc.next();
                arrayTim[i].setPemain(j, namaPemain);
            }
        }

        //perulangan menampilkan hasil dataTim
        System.out.println("\n=================================");
        System.out.println("DATA TIM SEPAKBOLA YANG TERDAFTAR");
        System.out.println("=================================");
        i = 0;
        for (i = 0; i < n; i++) {
            //menampilkan data tim menggunakan method pada class
            arrayTim[i].showTim();
        }
    }
}

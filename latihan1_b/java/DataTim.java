public class DataTim {

    private String namaTim;
    private String negaraAsal;
    private int tahunBerdiri;

    private class DataPemain {
    
        private String namaPemain[] = new String[50];
        private int jumlah;

        public DataPemain(){
        }

        public void setNamaPemain(int pointer, String np) {
            this.namaPemain[pointer] = np;
        }

        public String getNamaPemain(int pointer) {
            return namaPemain[pointer];
        }

        public void setJumlah(int jp) {
            this.jumlah = jp;
        }

        public int getJumlah() {
            return jumlah;
        }

        public void showPemain() {
            int i = 0;
            for (i = 0; i < jumlah; i++) {
                System.out.println("   " + (i+1) + ". " + namaPemain[i]);
            }
        }
    }

    private DataPemain listPemain;

    /* konstruktor */
    public DataTim(){
        listPemain = new DataPemain();
    }
    public DataTim(String nt, String na, int tb){
        listPemain = new DataPemain();
        this.namaTim = nt;
        this.negaraAsal = na;
        this.tahunBerdiri = tb;
    }

    /* buat set dan get untuk seluruh variabel */

    public void setNamaTim(String nt) {
        this.namaTim = nt;
    }

    public String getNamaTim() {
        return namaTim;
    }

    public void setNegaraAsal(String na) {
        this.negaraAsal = na;
    }

    public String getNegaraAsal() {
        return negaraAsal;
    }

    public void setTahunBerdiri(int tb) {
        this.tahunBerdiri = tb;
    }

    public int getTahunBerdiri() {
        return tahunBerdiri;
    }

    public void setPemain(int pointer, String np) {
        listPemain.setNamaPemain(pointer, np);
    }

    public void setJumlahPemain(int jp) {
        listPemain.setJumlah(jp);
    }
    
    public void showTim() {
        System.out.println("\n>> " + namaTim + " <<");
        System.out.println("Negara Asal   : " + negaraAsal);
        System.out.println("Tahun Berdiri : " + tahunBerdiri);
        System.out.println("Daftar Pemain :");
        listPemain.showPemain();
    }
}

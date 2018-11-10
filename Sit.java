public class Sit {
    private String dateS;
    private String timeS;
    private String timeF;
    private int id;
    private String nameChild;
    private String address;

    public Sit(int id, String dateS, String timeS, String timeF, String nameChild, String address)
    {
       this.id= id;
       this.dateS=dateS;
       this.timeS=timeS;
       this.timeF=timeF;
       this.nameChild=nameChild;
       this.address=address;
    }

    public String getDateS()
    {
        return this.dateS;
    }
    public String getTimeS()
    {
        return this.timeS;
    }

    public String getAddress() {
        return address;
    }

    public int getId() {
        return id;
    }

    public String getNameChild() {
        return nameChild;
    }

    public String getTimeF() {
        return timeF;
    }
}

public class Carer {
    private int carerId;
    private String nameC;
    private String password;
    private String status;

    public Carer(int carerId, String nameC, String password, String status)
    {
        this.carerId=carerId;
        this.nameC=nameC;
        this.password=password;
        this.status=status;
    }

    public int getCarerId() {
        return carerId;
    }

    public String getNameC() {
        return nameC;
    }

    public String getPassword() {
        return password;
    }

    public String getStatus() {
        return status;
    }

    public void setStatus(String status) {
        this.status = status;
    }
}

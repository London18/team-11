
public class Carer {
    private int carerId;
    private String nameC;
    private String password;
    private String status;
    ArrayList<Sit> sits;
    Map buttonsPressed;

    public Carer(int carerId, String nameC, String password, String status, Arraylist sits, buttonPressed)
    {
        this.carerId=carerId;
        this.nameC=nameC;
        this.password=password;
        this.status=status;
        this.sits=sits;
        this.buttonsPressed=buttonPressed;
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

    public ArrayList<Sit> getSits() {
        return sits;
    }

    public Map getButtonPressed() {
        return buttonsPressed;
    }

    public void setButtonPressed(String buttonPressed) {

        for (Map.Entry<Integer, Integer> entry : this.buttonsPressed.entrySet())
        {
            if(entry.getValue==1)
            {
                entry.put(entry.getKey(),0);
            }
        }

        this.buttonsPressed.put(buttonPressed,1);
    }
}

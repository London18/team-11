public class Manager {

    ArrayList<Carer> carers;
    ArrayList<Sit> sits;
    Map<String,Integer> button=  new HashMap<String, Integer>{"Idle":1,"Go":0,"Arrived":0,"Finish":0};

    public Manager()
    public void addCarers(Carer c)
    {
        carers.add(c);
    }
    public void addSit(Sit s)
    {
        sits.add(s);
    }

    public ArrayList<Sit> getSits() {
        return sits;
    }

    public ArrayList<Carer> getCarers() {
        return carers;
    }

    public static void main(String[] args) {
        Manager m;
        m.sits(new Sit(1, "11-Nov-2018", "11:00", "13:00", "Andrew C.", "17 London Street LO3 6WD"));
        m.sits(new Sit(2, "11-Nov-2018", "15:00", "18:00", "Mary L.", "21 Waterloo Street WU5 8LD"));
        m.sits(new Sit(3, "11-Nov-2018", "11:00", "17:00", "Lily D.", "635 Danube Avenue DA5 3UB"));
        m.sits(new Sit(4, "11-Nov-2018", "9:00", "10:30", "Kelly H.", "45 Kensigton Street KS4 7BV"));
        m.sits(new Sit(5, "11-Nov-2018", "19:00", "22:00", "Harry C.", "Gordon Avenue GO8 SD9"));
        m.sits(new Sit(6, "11-Nov-2018", "6:00", "14:00", "Lauren V.", "178 Nadia Street NO3 6LS"));

        for (int i = 0; i < 2; i++) {
            m.addCarers(new Carer(234567, "Adela", "carer1", "Not working", getSits().get(i)),button);
        }

        for (int i = 2; i < 4; i++) {
            m.addCarers(new Carer(799568, "Lola", "carer2", "Not working", getSits().get(i)),button);
        }

        for (int i = 4; i < 6; i++) {
            m.addCarers(new Carer(987456, "Viktoria", "carer3", "Not working", getSits().get(i)),button);
        }


    }



    public void changeStatus()
    {
        for(int i=0; i<m.carers.length();i++)
        {
            if(carers.get(i).getButtonPressed().equals("Idle"))
            {
                carers.get(i).setStatus("Not working");
            }
            else{
                if(carers.get(i).getButtonPressed().equals("Go"))
                {
                    carers.get(i).setStatus("On the road");
                }
                else
                {
                    if(carers.get(i).getButtonPressed().equals("Arrived"))
                    {
                        carers.get(i).setStatus("Working");
                    }
                    else
                    {
                        if(carers.get(i).getButtonPressed().equals("Finish"))
                        {
                            carers.get(i).setStatus("Not working");
                        }
                    }
                }
            }
        }
    }

    public void changeButtom()
    {

    }

}

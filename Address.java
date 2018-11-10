public class Address {
    private String street;
    private String postalCode;

    public Address(String street, String postalCode)
    {
        this.street=street;
        this.postalCode=postalCode;
    }
    public void setAddress(String street, String postalCode)
    {
        this.street=street;
        this.postalCode=postalCode;
    }
    public String getStreet()
    {
        return this.street;
    }
    public String getPostalCode()
    {
        return this.postalCode;
    }
}

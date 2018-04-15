using System;
using System.Collections.Generic;
using System.Web;

/// <summary>
/// Summary description for ClassName
/// </summary>
public class ProfileModel
{
   public string FirstName {get;set;}
   public string LastName {get;set;}
   public string Email {get;set;}

   public string ImagePath {get;set;}
   public string Occupation {get;set;}
   public string Gender {get;set;}
   public string Bio {get;set;}

   public bool Newsletter {get;set;}
   public bool Marketing {get;set;}
   public bool PartnerOffers {get;set;}
}

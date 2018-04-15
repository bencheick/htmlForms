class Profile < ActiveRecord::Base
  attr_accessible :bio, :email, :firstName, :gender, :lastName, :marketing, :newsletter, :occupation, :partners
  OCCUPATION_TYPES = ["Developer", "WebDesigner", "Consultant", "Manager", "Other"]

end

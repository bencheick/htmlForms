class ProfileController < ApplicationController
  def show
       #nothing to do here, the default is to show the view
  end

  def edit
   if request.post?
      @profileMod = ProfileModel.new()

      @profileMod.firstName= request.params["firstName"]
      @profileMod.lastName= request.params["lastName"]
      @profileMod.email= request.params["emailAddress"]
      @profileMod.bio= request.params["bio"]
      @profileMod.occupation= request.params["occupation"]
      @profileMod.gender= request.params["gender"]

      if request.params["prefs"] != nil
        @profileMod.marketing= request.params["prefs"].include?("marketing")
        @profileMod.partners= request.params["prefs"].include?("partners")
        @profileMod.newsletter= request.params["prefs"].include?("newsletter")
      end


     #save file
     @fileInformation = request.params["profileImage"]
      if @fileInformation != nil
        @fileName = File.basename(@fileInformation.original_filename)
        @outputPath = File.join("public/images", @fileName)

        File.open(@outputPath, "wb" ) { |f| f.write(@fileInformation.read)}
        @profileMod.imagePath =File.join("/images", @fileName)
      end


   end


  end
end

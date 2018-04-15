class CreateProfiles < ActiveRecord::Migration
  def change
    create_table :profiles do |t|
      t.string :firstName
      t.string :lastName
      t.string :email
      t.string :bio
      t.string :gender
      t.string :occupation
      t.boolean :marketing
      t.boolean :partners
      t.boolean :newsletter

      t.timestamps
    end
  end
end

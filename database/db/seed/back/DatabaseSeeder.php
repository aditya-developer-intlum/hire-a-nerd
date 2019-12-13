<?php

// File: /database/seeds/DatabaseSeeder.php
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
        */
    public function run()
    {
        
     
        $this->call(CountriesTableSeeder::class);
        $this->call(EmployeesTableSeeder::class);
        $this->call(GigsTableSeeder::class);
        $this->call(GigPricesTableSeeder::class);
        $this->call(GigScopesTableSeeder::class);
        $this->call(LanguagesTableSeeder::class);
        $this->call(LinkedAccountsTableSeeder::class);
        $this->call(MarketplacesTableSeeder::class);
        $this->call(MenuTableSeeder::class);
        $this->call(MigrationsTableSeeder::class);
        $this->call(NotificationsTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(ScopesTableSeeder::class);
        $this->call(SkillsTableSeeder::class);
        $this->call(SocialMediaLinksTableSeeder::class);
        $this->call(SubMenuTableSeeder::class);
        $this->call(TestimonialsTableSeeder::class);
        $this->call(UniversitiesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(UserBillingAddressesTableSeeder::class);
        $this->call(UserCertificationsTableSeeder::class);
        $this->call(UserDetailTableSeeder::class);
        $this->call(UserEducationTableSeeder::class);
        $this->call(UserLanguagesTableSeeder::class);
        $this->call(UserNotificationsTableSeeder::class);
        $this->call(UserSkillsTableSeeder::class);
        $this->call(UserSocialMediaTableSeeder::class);
    }

}

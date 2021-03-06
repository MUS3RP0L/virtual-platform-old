<?php

use Illuminate\Database\Seeder;

class ContributionRate3TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = [
            ['month_year' => '2017-10-1', 'retirement_fund' => '1.850', 'mortuary_quota' => '0.650', 'retirement_fund_commission' => '1.850', 'mortuary_quota_commission' => '0.650', 'mortuary_aid' => '1.5000', 'user_id' => '1'],
            ['month_year' => '2017-11-1', 'retirement_fund' => '1.850', 'mortuary_quota' => '0.650', 'retirement_fund_commission' => '1.850', 'mortuary_quota_commission' => '0.650', 'mortuary_aid' => '1.5000', 'user_id' => '1'],
            ['month_year' => '2017-12-1', 'retirement_fund' => '1.850', 'mortuary_quota' => '0.650', 'retirement_fund_commission' => '1.850', 'mortuary_quota_commission' => '0.650', 'mortuary_aid' => '1.5000', 'user_id' => '1'],
        ];

        foreach ($statuses as $status) {
            Muserpol\ContributionRate::create($status);
        }
    }
}

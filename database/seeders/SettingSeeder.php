<?php

namespace Database\Seeders;

use App\Models\SettingsModel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $valueContact = array(
            'information' => 'Excited him now natural saw passage offices you minuter. At by asked being court hopes',
            'address' => '545, Marina Rd.,/nMohammed Bin Rashid Boulevard,/nDubai 123234',
            'email' => 'office@company.com',
            'phone' => '1-866-599-6674',
            'fax' => '(123) 254-8547',
            'location' => 'longitute',
        );

        $valueAbout = array(
            'subtitle' => 'We are on the tour operator since since 2001',
            'about' => 'By in no ecstatic wondered disposal my speaking. Direct wholly valley or uneasy it at really. Sir wish like said dull and need make. Sportsman one bed departure rapturous situation disposing his. Off say yet ample ten ought hence. Depending in newspaper an september do existence strangers. Total great saw water had mirth happy new.\nWarmly little before cousin sussex entire men set. Blessing it ladyship on sensible judgment settling outweigh. Worse linen an of civil jokes leave offer. Parties all clothes removal cheered calling prudent her. And residence for met the estimable disposing. Mean if he they been no hold mr. Is at much do made took held help. Latter person am secure of estate genius at.\nLose eyes get fat shew. Winter can indeed letter oppose way change tended now. So is improve my charmed picture exposed adapted demands. Received had end produced prepared diverted strictly off man branched. Known ye money so large decay voice there to. Preserved be mr cordially incommode as an. He doors quick child an point at. Had share vexed front least style off why him.'
        );

        $feature = array(
            [
                'icon' => 'elegent-icon-gift_alt',
                'title' => 'We ﬁnd better deals',
                'subtitle' => 'Considered an invitation do introduced sufficient understood instrument it.'
            ],
            [
                'icon' => 'elegent-icon-wallet',
                'title' => 'Best price guaranteed',
                'subtitle' => 'Discovery sweetness principle discourse shameless bed one excellent.'
            ],
            [
                'icon' => 'elegent-icon-heart_alt',
                'title' => 'Travellers love us',
                'subtitle' => 'Sentiments of surrounded friendship dispatched connection john shed hope.'
            ],
            [
                'icon' => 'elegent-icon-heart_alt',
                'title' => 'Travellers love us',
                'subtitle' => 'Sentiments of surrounded friendship dispatched connection john shed hope.'
            ],
            [
                'icon' => 'elegent-icon-wallet',
                'title' => 'Best price guaranteed',
                'subtitle' => 'Discovery sweetness principle discourse shameless bed one excellent.'
            ],
            [
                'icon' => 'elegent-icon-gift_alt',
                'title' => 'We ﬁnd better deals',
                'subtitle' => 'Considered an invitation do introduced sufficient understood instrument it.'
            ],
        );

        $valueFeature = array(
            'subtitle' => 'He doors quick child an point',
            'feature' => json_encode($feature),
        );

        $valuePartner = array(
            [
                'name' => 'instyle',
                'logo' => 'images/partner/1.png',
            ],
            [
                'name' => 'elle',
                'logo' => 'images/partner/2.png',
            ],
            [
                'name' => 'living',
                'logo' => 'images/partner/3.png',
            ],
            [
                'name' => 'brides',
                'logo' => 'images/partner/4.png',
            ],
            [
                'name' => 'Traveler',
                'logo' => 'images/partner/5.png',
            ],
        );

        SettingsModel::create([
            'name' => 'contact_us',
            'value' => json_encode($valueContact),
        ]);

        SettingsModel::create([
            'name' => 'about_us',
            'value' => json_encode($valueAbout),
        ]);

        SettingsModel::create([
            'name' => 'feature',
            'value' => json_encode($valueFeature),
        ]);

        SettingsModel::create([
            'name' => 'partner',
            'value' => json_encode($valuePartner),
        ]);
    }
}

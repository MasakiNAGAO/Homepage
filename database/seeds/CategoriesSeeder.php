<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => "anonymIsoc",
            'headline' => "無名氏「イソクラテス伝」",
            'caption' => "しばしば紀元後500年ごろの歴史家ゾシモスに帰される匿名の伝記。W. Dindorf, 1852, <i>Scholia Graeca in Aeschinem
                        et Isocratem</i>, Oxford University Pressを底本にしています。",
            'major_category_id' => 5,
            'major_category_name' => "isocrates"
        ]);
        Category::create([
            'name' => "sophist",
            'headline' => "ソフィスト反駁（ΚΑΤΑ ΤΩΝ ΣΟΦΙΣΤΩΝ）",
            'major_category_id' => 5,
            'major_category_name' => "isocrates"
        ]);
        Category::create([
            'name' => "Aias",
            'headline' => "アンティステネス『アイアス』",
            'caption' => "アンティステネスの真作と考えられる擬似法廷弁論のひとつ。アキレウスの死後、彼の武具をめぐって行われたアイアス・オデュッセウス間の論争がモチーフとなっています
                    （時系列上はソフォクレスの悲劇『アイアス』の前日譚。<a class=\"link\"
                        href=\"https://ja.wikipedia.org/wiki/%E5%A4%A7%E3%82%A2%E3%82%A4%E3%82%A2%E3%83%BC%E3%82%B9\"
                        target=\"_blank\">こちらのWikipedia記事</a>を見れば大体の背景事情を掴めるはずです）。
                    ギリシア方の諸将が陪審員として臨席する前で、勇将アイアスがオデュッセウス批判の演説を展開します。",
            'major_category_id' => 4,
            'major_category_name' => "minor_socratics"
        ]);
        Category::create([
            'name' => "Odysseus",
            'headline' => "アンティステネス『オデュッセウス』",
            'caption' => "アンティステネスの真作と考えられる擬似法廷弁論のひとつ。『アイアス』と対を成す著作で、知将オデュッセウスが、論敵の告発に対する執拗な反論を展開します。
                    『アイアス』との文体・論調の違いに注目したいところです。",
            'major_category_id' => 4,
            'major_category_name' => "minor_socratics"
        ]);
        Category::create([
            'name' => "sec1",
            'headline' => "1．論点導入：「幸福な生」をめぐるレース",
            'major_category_id' => 3,
            'major_category_name' => "philebus"
        ]);
        Category::create([
            'name' => "sec2",
            'headline' => "2．快の複数性・非単一性",
            'major_category_id' => 3,
            'major_category_name' => "philebus"
        ]);
        Category::create([
            'name' => "en",
            'headline' => "ニコマコス倫理学 (ΗΘΙΚΑ ΝΙΚΟΜΑΧΕΙΑ)",
            'major_category_id' => 2,
            'major_category_name' => "en"
        ]);
        Category::create([
            'name' => "AP",
            'headline' => "分析論後書 (ΑΝΑΛΥΤΙΚΩΝ ΥΣΕΡΩΝ)",
            'major_category_id' => 1,
            'major_category_name' => "aristotle"
        ]);
        Category::create([
            'name' => "Physica",
            'headline' => "自然学 (ΦΥΣΙΚΗ ΑΚΡΟΑΣΙΣ)",
            'major_category_id' => 1,
            'major_category_name' => "aristotle"
        ]);
        Category::create([
            'name' => "Rhetoric",
            'headline' => "弁論術 (ΤΕΧΝΗ ΡΗΤΟΡΙΚΗ)",
            'major_category_id' => 1,
            'major_category_name' => "aristotle"
        ]);
        Category::create([
            'name' => "Poietic",
            'headline' => "詩学 (ΠΕΡΙ ΠΟΙΗΤΙΚΗΣ)",
            'major_category_id' => 1,
            'major_category_name' => "aristotle"
        ]);
        Category::create([
            'name' => "EE",
            'headline' => "エウデモス倫理学 (ΗΘΙΚΑ ΕΥΔΗΜΕΙΑ)",
            'major_category_id' => 1,
            'major_category_name' => "aristotle"
        ]);
        Category::create([
            'name' => "MM",
            'headline' => "大道徳学 (ΗΘΙΚΑ ΜΕΓΑΛΑ)",
            'major_category_id' => 1,
            'major_category_name' => "aristotle"
        ]);
        
        // $datum=[
        //     [
        //     'name' => "anonymIsoc",
        //     'headline' => "無名氏「イソクラテス伝」",
        //     'caption' => "しばしば紀元後500年ごろの歴史家ゾシモスに帰される匿名の伝記。W. Dindorf, 1852, <i>Scholia Graeca in Aeschinem
        //                 et Isocratem</i>, Oxford University Pressを底本にしています。",
        //     'major_category_id' => 5,
        //     'major_category_name' => "isocrates"
        //     ],
        //     [
        //     'name' => "sophist",
        //     'headline' => "ソフィスト反駁（ΚΑΤΑ ΤΩΝ ΣΟΦΙΣΤΩΝ）",
        //     'major_category_id' => 5,
        //     'major_category_name' => "isocrates"
        //     ],
        //     [
        //     'name' => "Aias",
        //     'headline' => "アンティステネス『アイアス』",
        //     'caption' => "アンティステネスの真作と考えられる擬似法廷弁論のひとつ。アキレウスの死後、彼の武具をめぐって行われたアイアス・オデュッセウス間の論争がモチーフとなっています
        //             （時系列上はソフォクレスの悲劇『アイアス』の前日譚。<a class=\"link\"
        //                 href=\"https://ja.wikipedia.org/wiki/%E5%A4%A7%E3%82%A2%E3%82%A4%E3%82%A2%E3%83%BC%E3%82%B9\"
        //                 target=\"_blank\">こちらのWikipedia記事</a>を見れば大体の背景事情を掴めるはずです）。
        //             ギリシア方の諸将が陪審員として臨席する前で、勇将アイアスがオデュッセウス批判の演説を展開します。",
        //     'major_category_id' => 4,
        //     'major_category_name' => "minor_socratics"
        //     ],
        //     [
        //     'name' => "Odysseus",
        //     'headline' => "アンティステネス『オデュッセウス』",
        //     'caption' => "アンティステネスの真作と考えられる擬似法廷弁論のひとつ。『アイアス』と対を成す著作で、知将オデュッセウスが、論敵の告発に対する執拗な反論を展開します。
        //             『アイアス』との文体・論調の違いに注目したいところです。",
        //     'major_category_id' => 4,
        //     'major_category_name' => "minor_socratics"
        //     ],
        //     [
        //     'name' => "sec1",
        //     'headline' => "1．論点導入：「幸福な生」をめぐるレース",
        //     'major_category_id' => 3,
        //     'major_category_name' => "philebus"
        //     ],
        //     [
        //     'name' => "sec2",
        //     'headline' => "2．快の複数性・非単一性",
        //     'major_category_id' => 3,
        //     'major_category_name' => "philebus"
        //     ],
        //     [
        //     'name' => "en",
        //     'headline' => "ニコマコス倫理学 (ΗΘΙΚΑ ΝΙΚΟΜΑΧΕΙΑ)",
        //     'major_category_id' => 2,
        //     'major_category_name' => "en"
        //     ],
        //     [
        //     'name' => "AP",
        //     'headline' => "分析論後書 (ΑΝΑΛΥΤΙΚΩΝ ΥΣΕΡΩΝ)",
        //     'major_category_id' => 1,
        //     'major_category_name' => "aristotle"
        //     ],
        //     [
        //     'name' => "Physica",
        //     'headline' => "自然学 (ΦΥΣΙΚΗ ΑΚΡΟΑΣΙΣ)",
        //     'major_category_id' => 1,
        //     'major_category_name' => "aristotle"
        //     ],
        //     [
        //     'name' => "Rhetoric",
        //     'headline' => "弁論術 (ΤΕΧΝΗ ΡΗΤΟΡΙΚΗ)",
        //     'major_category_id' => 1,
        //     'major_category_name' => "aristotle"
        //     ],
        //     [
        //     'name' => "Poietic",
        //     'headline' => "詩学 (ΠΕΡΙ ΠΟΙΗΤΙΚΗΣ)",
        //     'major_category_id' => 1,
        //     'major_category_name' => "aristotle"
        //     ],
        //     [
        //     'name' => "EE",
        //     'headline' => "エウデモス倫理学 (ΗΘΙΚΑ ΕΥΔΗΜΕΙΑ)",
        //     'major_category_id' => 1,
        //     'major_category_name' => "aristotle"
        //     ],
        //     [
        //     'name' => "MM",
        //     'headline' => "大道徳学 (ΗΘΙΚΑ ΜΕΓΑΛΑ)",
        //     'major_category_id' => 1,
        //     'major_category_name' => "aristotle"
        //     ]
        // ];
        
        // DB::table('categories')->insert($datum);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post1 = Post::create([
            'title' => 'Altec Lansing True Evo+ Truly Wireless Earphones',
            'image' => '1.jpg',
            'user_id' => 3,
            'excerpt' => 'Altec Lansing True Evo+ Truly Wireless Earphones, 4 Hours of Battery Life, Receive Up to 4 Charges on The Go, Access Siri or Google Voice Assistant via Bluetooth Through Your Smartphone, MZX659-BLK ',
            'body' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cur post Tarentum ad Archytam? An est aliquid, quod te sua sponte delectet? Quos quidem tibi studiose et diligenter tractandos magnopere censeo. </p>

            <p>Odium autem et invidiam facile vitabis. Sed haec omittamus; </p>
            
            <p>Nihil opus est exemplis hoc facere longius. An tu me de L. Quae ista amicitia est? Quonam, inquit, modo? Quis non odit sordidos, vanos, leves, futtiles? An nisi populari fama? In schola desinis. </p>
            
            <p>Quod quidem nobis non saepe contingit. Eam stabilem appellas. Duo Reges: constructio interrete. De ingenio eius in his disputationibus, non de moribus quaeritur. </p>
            
            <p>Tuo vero id quidem, inquam, arbitratu. Quid censes in Latino fore? Quo igitur, inquit, modo? Aliter enim explicari, quod quaeritur, non potest. Quis hoc dicit? Immo alio genere; </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cur post Tarentum ad Archytam? An est aliquid, quod te sua sponte delectet? Quos quidem tibi studiose et diligenter tractandos magnopere censeo. </p>

            <p>Odium autem et invidiam facile vitabis. Sed haec omittamus; </p>

            <p>Nihil opus est exemplis hoc facere longius. An tu me de L. Quae ista amicitia est? Quonam, inquit, modo? Quis non odit sordidos, vanos, leves, futtiles? An nisi populari fama? In schola desinis. </p>

            <p>Quod quidem nobis non saepe contingit. Eam stabilem appellas. Duo Reges: constructio interrete. De ingenio eius in his disputationibus, non de moribus quaeritur. </p>

            <p>Tuo vero id quidem, inquam, arbitratu. Quid censes in Latino fore? Quo igitur, inquit, modo? Aliter enim explicari, quod quaeritur, non potest. Quis hoc dicit? Immo alio genere; </p>",
            'trending' => true,
            'popular' => true,
        ]);
        $post1->categories()->attach(1);
        $post1->tags()->attach(1);

        $post11 = Post::create([
            'title' => 'Charming Evening Field',
            'image' => '2.jpg',
            'user_id' => 3,
            'excerpt' => 'No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely',
            'body' => "No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremelyNo one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremelyNo one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremelyNo one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely",
            'trending' => true,
            'popular' => true,
        ]);
        $post11->categories()->attach(1);
        $post11->tags()->attach(1);

        $post2 = Post::create([
            'title' => 'Traffic Jams Solved ',
            'image' => '3.jpg',
            'user_id' => 3,
            'excerpt' => 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings',
            'body' => "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachingsBut I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachingsBut I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachingsBut I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings",
            'trending' => true,
            'popular' => true,
        ]);
        $post2->categories()->attach(1);
        $post2->tags()->attach(1);

        $post3 = Post::create([
            'title' => 'Cliff Sunset Sea View',
            'image' => '4.jpg',
            'user_id' => 3,
            'excerpt' => 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings...',
            'body' => "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings...But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings...But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings...But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings...",
            'trending' => true,
            'popular' => true,
        ]);
        $post3->categories()->attach(1);
        $post3->tags()->attach(1);

        $post4 = Post::create([
            'title' => 'Trendy Summer Fashion',
            'image' => '5.jpg',
            'user_id' => 3,
            'excerpt' => 'To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses...',
            'body' => "To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses...To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses...To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses...To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses...",
            'trending' => true,
            'popular' => true,
        ]);
        $post4->categories()->attach(2);
        $post4->tags()->attach(2);

        $post5 = Post::create([
            'title' => 'New Fashion Outfits',
            'image' => '6.jpg',
            'user_id' => 3,
            'excerpt' => 'To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses...',
            'body' => "To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses...To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses...To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses...To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses...",
            'trending' => true,
            'popular' => true,
        ]);
        $post5->categories()->attach(2);
        $post5->tags()->attach(2);

        $post6 = Post::create([
            'title' => 'No one rejects, dislikes, or avoids pleasure',
            'image' => '7.jpg',
            'user_id' => 3,
            'excerpt' => 'To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses...',
            'body' => "To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses...To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses...To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses...To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses...",
            'trending' => true,
            'popular' => true,
        ]);
        $post6->categories()->attach(3);
        $post6->tags()->attach(3);

        $post7 = Post::create([
            'title' => 'To take a trivial example, which of us ever undertakes',
            'image' => '8.jpg',
            'user_id' => 3,
            'excerpt' => 'To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses...',
            'body' => "To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses...To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses...To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses...To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses...",
            'trending' => true,
            'popular' => true,
        ]);
        $post7->categories()->attach(3);
        $post7->tags()->attach(3);

        $post8 = Post::create([
            'title' => 'Trendy Summer Fashion',
            'image' => '9.jpg',
            'user_id' => 3,
            'excerpt' => 'To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses...',
            'body' => "To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses...To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses...To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses...To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses...",
            'trending' => true,
            'popular' => true,
        ]);
        $post8->categories()->attach(4);
        $post8->tags()->attach(4);

        $post9 = Post::create([
            'title' => 'These cases are perfectly simple and easy to distinguish',
            'image' => '10.jpg',
            'user_id' => 3,
            'excerpt' => 'To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses...',
            'body' => "To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses...To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses...To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses...To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses...",
            'trending' => true,
            'popular' => true,
        ]);
        $post9->categories()->attach(5);
        $post9->tags()->attach(5);

        $post10 = Post::create([
            'title' => 'welcomed and every pain avoided',
            'image' => '11.jpg',
            'user_id' => 3,
            'excerpt' => 'To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses...',
            'body' => "To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses...To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses...To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses...To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses...",
            'trending' => true,
            'popular' => true,
        ]);
        $post10->categories()->attach(5);
        $post10->tags()->attach(5);
    }
}

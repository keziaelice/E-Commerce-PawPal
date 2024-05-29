<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function view()
    {
        return view ("index");
    }

    private function data()
    {
        $dataString = <<<'str'
        [
            {
                "id": P0001,
                "name": "Pedigree Adult Lamb & Vegetables",
                "price": Rp73.000,
                "image": "p0001.jpeg",
                "description": "Pedigree Dewasa Nutrisi Lengkap untuk Anjing telah dirumuskan untuk memberikan anjing dewasa semua energi dan nutrisi yang mereka butuhkan untuk terus menjalani hidup sepenuh-penuhnya. Ini dikemas dengan vitamin, seng dan Omega 6 untuk membantu menjaga anjing dewasa tampak seperti pemenang terbaik-di-show, dan telah memimpin tingkat Vitamin E untuk menjaga sistem kekebalan tubuh muda di jantung. Bersama-sama dengan campuran khusus serat yang mempromosikan pencernaan yang sehat, dan kibbles perawatan mulut untuk membersihkan gigi."
            },
            {
                "id": p0003,
                "name": "Royal Canin Golden Retriever Adult",
                "price": Rp1.179.000,
                "image": "p0003.jpeg",
                "description": "GOLDEN RETRIEVER DEWASA membantu mendukung “penghalang” peran kulit (kompleks eksklusif) dan menjaga kulit & mantel kesehatan (EPA & DHA). Diperkaya dengan minyak borage. Formula ini mengandung nutrisi khusus untuk membantu mendukung fungsi jantung yang baik, Enrichedwith taurin dan EPA-DHA, membantu menjaga berat badan ideal orang dewasa Golden Retriever ini berkat kandungan kalori disesuaikan.

                KOMPOSISI: dehidrasi protein unggas, jagung, beras, gandum, lemak hewan, nabati protein isolat *, dihidrolisis protein hewani, serat nabati, bubur bit, minyak ikan, mineral, minyak kedelai, tomat dehidrasi, sekam psyllium dan biji, sakarida fructo-oligo , krustasea dihidrolisis (sumber glucosamine), minyak borage (0,1%), teh dan anggur hijau ekstrak (sumber polifenol), ekstrak marigold (sumber lutein), tulang rawan terhidrolisis (sumber chondroitin)."
            },
            {
                "id": p0004,
                "name": "Gnawlers Calcium Milk Bone Dental Snack",
                "price": Rp25.000,
                "image": "p0004.jpg",
                "description": "Snack Anjing Gnawlers Calcium Milk Bone small isi 7 pcs 60 gr

                Membantu membersihkan gigi dan menyegarkan bau mulut
                100 % tanpa daging, mengandung kalsium & susu

                Ingredients: Milk powder, Sodium caseinate, Calciumcarbonate, Cereal cellulose, Gelatin YuccaI, MO Natural flavor, Rosemary extraction.

                Scientifically engineered with all food grade raw materials and no artificial flavours or colors with reasonable level of calcium. It is easily digestible, cleans teeth and freshens breath"
            },
            {
                "id": p0005,
                "name": "Non-Toxic Rubber Chew Bone Toy",
                "price": Rp.32.000,
                "image": "p0005.jpg",
                "description": "Snack Anjing Gnawlers Calcium Milk Bone medium isi 4 pcs 90 gr

                Membantu membersihkan gigi dan menyegarkan bau mulut
                100 % tanpa daging, mengandung kalsium & susu

                Ingredients: Milk powder, Sodium caseinate, Calciumcarbonate, Cereal cellulose, Gelatin YuccaI, MO Natural flavor, Rosemary extraction.

                Scientifically engineered with all food grade raw materials and no artificial flavours or colors with reasonable level of calcium. It is easily digestible, cleans teeth and freshens breath"
            },
            {
                "id": p0008,
                "name": "Tempat Tidur Anjing Soft Warm Dog Bed Grey",
                "price": Rp64.900,
                "image": "p0008.jpeg",
                "description": "Tempat tidur untuk hewan peliharaan ini sangat cocok digunakan untuk hewan peliharaan seperti anjing ataupun kucing kesayangan Anda. Istirahat mereka akan lebih nyaman serta hangat sehingga mereka lebih bahagia dan tidak mudah stress. Material Berkualitas Kasur ini terbuat dari materiak oxford dan katun. Bahan oxford terkenal tahan lama dan tidak mudah rusak. Sementara bahan katun memiliki tekstur yang halus dan lembut sehingga hewan peliharaan Anda dapat berlama-lama istirahat di kasur ini. Desain dan tampilan yang menarik membuat kasur tidur ini juga menambah dekorasi di rumah Anda..

                Rincian yang Anda dapatkan untuk pembelian produk ini:
                1 x Kasur Tempat Tidur Anjing Soft Warm Dog Bed Size M

                Material Oxford dan Katun
                Dimensi 60 x 38 x 11 cm"
            },
            {
                "id": p0009,
                "name": "Whiskas Makanan Kucing Kering Junior Mackerel",
                "price": Rp79.900,
                "image": "p0009-1.jpeg",
                "description": "Whiskas junior mackerel merupakan makanan kucing kering yang diracik khusus untuk memenuhi kebutuhan kucing Anda pada tahap kehidupan mereka. Rasa ikan mackerel renyah di bagian luar dengan tekstur creamy lezat di tengah. Lengkungan Whiskas dry akan membantu merawat kesehatan mulut dan gigi kucing. Diperkaya dengan kalsium dan fosfor, termasuk vitamin D untuk pertumbuhan tulang serta tubuh yang sehat. Mengandung antioksidan alami berdasarkan vitamin E untuk sistem kekebalan tubuh. Protein dan lemak berkualitas terpilih untuk menyediakan energi untuk bermain. Ideal untuk anak kucing usia 2-12 bulan."
            },
            {
                "id": p0011,
                "name": "IAMS Proactive Health Premium Cat Food – Cat Dry Food in Tuna and Salmon Meal Flavor",
                "price": Rp123.690,
                "image": "p0011-1.jpeg",
                "description": "IAMS Proactive Healthy Cat Food with Tuna and Salmon is a great way to provide your cat with all the nutrients they need in one tasty package. With delicious chicken cats love, this nutritious dry food for cat can help support their overall health and keep them happy.

                - Developed formula with VETERINARIANS
                - IAMS cat food contains PREMIUM TAILORED NUTRITION with 0% fillers
                - HEALTHY SKIN AND COAT – This IAMS cat dry food is formulated with Omega 6 and 3 fatty acids, which help your cat have healthy skin and coat
                - This cat food dry is scientifically proven for HEALTHY NATURAL DEFENSE with Vitamin-E
                - HEALTHY DIGESTION – Your cat will love the added benefits of prebiotics and beet pulp in this cat food dry food, which help support their digestive system
                - STRONG MUSCLES – Made with high-quality protein sources, this IAMS salmon cat food helps cats maintain their muscle strength
                - HEALTHY TEETH – This tuna cat food contains crunchy kibbles that help reduce plaque and tartar build-up, which can lead to bad breath"
            },
            {
                "id": p0012,
                "name": "Me-O Creamy Treats Salmon",
                "price": Rp21.900,
                "image": "p0012.png",
                "description": "Snack Kucing MEO Creamy (isi 15 gr x 4)

                Manfaat :
                1. Taurin untuk kesehatan mata dan mempertajam penglihatan kucing
                2. Vitamin C meningkatkan sistem kekebalan tubuh dan membantu mengurangi stress terhadap lingkungan
                3. Kalsium, Fosfor dan Vitamin D membantu memperkuat tulang dan gigi
                4. Formula ini dikembangkan untuk mencegah risiko penyakit kucing pada saluran bawah kemih dan batu ginjal
                5. Omega 3 dan Omega 6 untuk membantu melembutkan kulit dan bulu kucing
                6. Formula rendah sodium membantu menurunkan risiko tekanan darah tinggi, penyakit ginjal, dan jantung pada kucing"
            },
            {
                "id": 9,
                "name": "Random Item 9",
                "price": 90,
                "image": "https://mdbcdn.b-cdn.net/img/bootstrap-ecommerce/items/8.webp",
                "description": "Unisex Baju"
            },
            {
                "id": 10,
                "name": "Random Item 10",
                "price": 100,
                "image": "https://mdbcdn.b-cdn.net/img/bootstrap-ecommerce/items/8.webp",
                "description": "Unisex Baju"
            }
        ]
        str;

        $data = json_decode($dataString, false);
        return $data;
    }
}

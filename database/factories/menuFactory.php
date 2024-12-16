<?php

namespace Database\Factories;

use App\Models\resto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\menu>
 */
class menuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $menuName = [
            'Pizza', 'Burger', 'Sushi', 'Salad', 'Curry', 'Rice', 'Noodles', 'Fried Rice', 'Steak', 'Meat', 'Vegetable', 'Egg', 'Fish', 'Chicken', 'Beef', 'Pork', 'Lamb', 'Poultry', 'Turkey', 'Duck',
            'Tempura', 'Ramen', 'Pho', 'Pad Thai', 'Dim Sum', 'Spring Rolls', 'Tacos', 'Burrito', 'Nachos', 'Quesadilla', 'Paella', 'Tapas', 'Shawarma', 'Kebab', 'Falafel', 'Hummus', 'Biryani',
            'Paneer', 'Tandoori', 'Dosa', 'Samosa', 'Baklava', 'Moussaka', 'Goulash', 'Risotto', 'Lasagna', 'Spaghetti', 'Macaroni', 'Cheeseburger', 'Hotdog', 'Pancakes', 'Waffles', 'Ice Cream',
            'Gelato', 'Sorbet', 'Pudding', 'Cake', 'Brownie', 'Muffin', 'Croissant', 'Donut', 'Bagel', 'Sandwich', 'Wrap', 'Pie', 'Quiche', 'Soup', 'Chowder', 'Bisque', 'Gumbo', 'Stew',
            'Roast', 'Grill', 'Barbecue', 'Fries', 'Chips', 'Popcorn', 'Sausage', 'Ham', 'Bacon', 'Omelette', 'Scrambled Eggs', 'Boiled Eggs', 'Stir Fry', 'Dim Sum', 'Gyoza', 'Baozi',
            'Okonomiyaki', 'Takoyaki', 'Satay', 'Rendang', 'Gado-Gado', 'Ketoprak', 'Nasi Goreng', 'Mie Goreng', 'Sate Ayam', 'Soto Ayam', 'Bakso', 'Pempek', 'Martabak', 'Kerak Telor',
            'Es Campur', 'Cendol', 'Kolak', 'Pisang Goreng', 'Singkong Goreng', 'Ayam Penyet', 'Ayam Goreng', 'Lele Goreng', 'Sambal', 'Gudeg', 'Rawon', 'Sop Buntut', 'Lontong', 'Ketupat'
        ];

        $menuDescription = [
            'Pizza' => 'A round, flat bread topped with tomato sauce, cheese, and various toppings like meats, vegetables, and herbs, then baked until crispy and golden.',
            'Burger' => 'A sandwich consisting of a cooked patty, usually made from beef, served in a bun with condiments, lettuce, cheese, and other toppings.',
            'Sushi' => 'A Japanese dish featuring vinegared rice paired with ingredients like raw fish, seafood, or vegetables, often wrapped in seaweed (nori).',
            'Salad' => 'A dish made of fresh vegetables, fruits, or other ingredients like nuts, seeds, cheese, or protein, typically dressed with oil, vinegar, or other sauces.',
            'Curry' => 'A flavorful and aromatic dish made with a variety of spices, often served with rice or bread and containing meats, vegetables, or lentils.',
            'Rice' => 'A staple food made from steamed or boiled grains, often served as a base for other dishes like curry, stir-fries, or sushi.',
            'Noodles' => 'Thin strips of dough, typically made from wheat or rice, served in soups, stir-fries, or with sauces.',
            'Fried Rice' => 'A dish made by stir-frying cooked rice with vegetables, eggs, meat, and seasonings, often served as a side or main dish.',
            'Steak' => 'A cut of meat, typically beef, cooked by grilling, frying, or broiling, often served with sides like vegetables or potatoes.',
            'Meat' => 'Any edible flesh from animals, commonly beef, chicken, pork, or lamb, prepared in various ways such as roasting, grilling, or frying.',
            'Vegetable' => 'Plant-based food that is typically savory, like carrots, broccoli, or spinach, often used as a side dish or in salads, soups, and stir-fries.',
            'Egg' => 'A common ingredient from chickens (or other birds), often used in cooking or baking, in dishes like omelets, scrambled eggs, and baked goods.',
            'Fish' => 'A protein-rich food from aquatic animals, often grilled, baked, or fried, commonly served with rice or vegetables.',
            'Chicken' => 'Poultry commonly cooked in various forms, including roasting, frying, grilling, or in stews, and used in dishes like fried chicken or chicken curry.',
            'Beef' => 'Meat from cattle, used in a wide range of dishes like steaks, burgers, stews, or stir-fries.',
            'Pork' => 'Meat from pigs, commonly used in dishes like pork chops, bacon, sausages, or pulled pork.',
            'Lamb' => 'Tender meat from young sheep, often roasted or grilled, known for its distinctive flavor.',
            'Poultry' => 'A category of birds raised for food, including chicken, turkey, duck, and goose.',
            'Turkey' => 'A large poultry bird often roasted for holiday meals or used in sandwiches and soups.',
            'Duck' => 'A waterfowl known for its rich, flavorful meat, often roasted or pan-seared.',
            'Tempura' => 'A Japanese dish of battered and deep-fried vegetables or seafood, often served with dipping sauce.',
            'Ramen' => 'A Japanese noodle soup dish made with broth, noodles, and various toppings like sliced pork, eggs, and vegetables.',
            'Pho' => 'A Vietnamese soup consisting of broth, rice noodles, herbs, and typically beef or chicken.',
            'Pad Thai' => 'A Thai stir-fried noodle dish made with rice noodles, eggs, tofu, shrimp or chicken, peanuts, and a flavorful tamarind sauce.',
            'Dim Sum' => 'A collection of small, bite-sized dishes served in Chinese cuisine, often steamed or fried, including dumplings, buns, and rolls.',
            'Spring Rolls' => 'Thin wrappers filled with vegetables or meat, typically served fresh or fried, and often dipped in sauces.',
            'Tacos' => 'A Mexican dish consisting of a tortilla filled with various fillings like beef, chicken, fish, or vegetables, topped with salsa, cheese, and guacamole.',
            'Burrito' => 'A Mexican dish made by wrapping a large flour tortilla around fillings like beans, rice, meat, cheese, and salsa.',
            'Nachos' => 'Tortilla chips topped with melted cheese and often served with toppings like jalapeños, sour cream, or guacamole.',
            'Quesadilla' => 'A Mexican dish made by filling a tortilla with cheese and sometimes meat or vegetables, then folding and grilling it.',
            'Paella' => 'A Spanish rice dish typically cooked with saffron, seafood, chicken, and a variety of vegetables.',
            'Tapas' => 'Small Spanish appetizers or snacks, often served in a variety of dishes such as olives, cheeses, or meatballs.',
            'Shawarma' => 'A Middle Eastern dish made from seasoned meat, usually lamb, chicken, or beef, cooked on a vertical rotisserie and served in a pita or flatbread with toppings.',
            'Kebab' => 'Skewered and grilled meat, often served with rice or flatbread, originating from Middle Eastern and South Asian cuisines.',
            'Falafel' => 'Deep-fried balls made from ground chickpeas, herbs, and spices, commonly served in pita bread with vegetables and tahini.',
            'Hummus' => 'A creamy dip made from pureed chickpeas, tahini, olive oil, and garlic, commonly served with pita bread or vegetables.',
            'Biryani' => 'A flavorful rice dish, often containing meat, vegetables, and aromatic spices like saffron, originating from Indian and Middle Eastern cuisines.',
            'Paneer' => 'A type of Indian cheese, often used in curries or grilled in dishes like paneer tikka.',
            'Tandoori' => 'A style of cooking, often associated with Indian cuisine, where meats or vegetables are marinated in yogurt and spices and cooked in a tandoor oven.',
            'Dosa' => 'A thin, crispy Indian pancake made from fermented rice and lentil batter, typically served with chutneys and sambar.',
            'Samosa' => 'A popular Indian snack, consisting of a pastry filled with spiced potatoes, peas, or meat, then deep-fried until crispy.',
            'Baklava' => 'A sweet, flaky dessert made of layers of phyllo dough, filled with chopped nuts and sweetened with honey or syrup, commonly found in Middle Eastern cuisine.',
            'Moussaka' => 'A Greek dish made with layers of eggplant, ground meat, and béchamel sauce, baked until golden.',
            'Goulash' => 'A Hungarian stew made with meat, vegetables, and paprika, typically served with bread or dumplings.',
            'Risotto' => 'An Italian dish made with rice cooked in a flavorful broth, often served with meat, vegetables, or seafood.',
            'Lasagna' => 'A layered Italian pasta dish, made with sheets of pasta, meat sauce, béchamel, and cheese.',
            'Spaghetti' => 'An Italian pasta dish served with a variety of sauces, often including tomatoes, meatballs, or seafood.',
            'Macaroni' => 'Small, elbow-shaped pasta, often used in dishes like macaroni and cheese.',
            'Cheeseburger' => 'A hamburger with a slice of cheese melted on top of the patty, typically served with lettuce, tomato, and condiments.',
            'Hotdog' => 'A cooked sausage, often served in a bun and topped with mustard, ketchup, onions, and other toppings.',
            'Pancakes' => 'Soft, round cakes made from batter and fried on a griddle, often served with syrup and butter.',
            'Waffles' => 'Crispy, grid-patterned cakes made from batter, often served with syrup, fruit, or whipped cream.',
            'Ice Cream' => 'A sweet, frozen dessert made from cream, sugar, and flavorings like vanilla, chocolate, or fruit.',
            'Gelato' => 'An Italian-style ice cream, typically denser and richer than regular ice cream, made with milk, cream, and flavorings.',
            'Sorbet' => 'A dairy-free frozen dessert made from fruit puree, sugar, and water.',
            'Pudding' => 'A sweet, creamy dessert made from milk, sugar, and flavorings like chocolate or vanilla.',
            'Cake' => 'A sweet baked dessert, often layered and topped with frosting, made with flour, sugar, eggs, and butter.',
            'Brownie' => 'A rich, chocolatey dessert, often dense and fudgy, typically served in square or rectangular pieces.',
            'Muffin' => 'A small, sweet or savory baked good, often made with fruits or nuts, like blueberry muffins.',
            'Croissant' => 'A buttery, flaky pastry, typically eaten at breakfast or with coffee.',
            'Donut' => 'A sweet, fried dough pastry, often ring-shaped and covered in sugar or glaze.',
            'Bagel' => 'A round bread with a hole in the center, typically boiled before baking and often topped with seeds like sesame or poppy.',
            'Sandwich' => 'A dish made by placing fillings like meat, cheese, and vegetables between two slices of bread.',
            'Wrap' => 'A type of sandwich made by wrapping fillings in a flatbread or tortilla.',
            'Pie' => 'A baked dish made with a pastry crust, typically filled with sweet fruits, custards, or savory ingredients.',
            'Quiche' => 'A savory pie filled with eggs, cream, cheese, and fillings like spinach, bacon, or mushrooms.',
            'Soup' => 'A liquid dish typically made by boiling meat, vegetables, or grains in broth.',
            'Chowder' => 'A creamy soup, often made with seafood or vegetables, typically thickened with milk or cream.',
            'Bisque' => 'A smooth, creamy soup, typically made from shellfish like lobster or crab.',
            'Gumbo' => 'A thick, hearty stew from Louisiana, made with meat, seafood, and vegetables, served over rice.',
            'Stew' => 'A slow-cooked dish made with meat, vegetables, and a flavorful broth.',
            'Roast' => 'A method of cooking meat or vegetables in an oven, often seasoned and served with sides.',
            'Grill' => 'A cooking method where food is cooked on a grill over an open flame or heat source.',
            'Barbecue' => 'A style of cooking meat, typically outdoors, using smoke or a slow, indirect heat.',
            'Fries' => 'Thin strips of potato, deep-fried and often salted, served as a side dish.',
            'Chips' => 'Thin slices of potato, deep-fried or baked and typically served as a snack or side dish.',
            'Popcorn' => 'A snack made from heated corn kernels that pop open, often seasoned with butter or salt.',
            'Sausage' => 'A type of meat product made by grinding meat, spices, and other ingredients, typically stuffed into a casing.',
            'Ham' => 'A cut of meat from the pig, often cured and cooked, commonly used in sandwiches or as a main dish.',
            'Bacon' => 'A type of salt-cured pork, often fried until crispy and served as a breakfast side or ingredient.',
            'Omelette' => 'A dish made by cooking beaten eggs in a pan and filling with ingredients like cheese, meat, or vegetables.',
            'Scrambled Eggs' => 'Beaten eggs cooked in a pan, often served as a breakfast dish.',
            'Boiled Eggs' => 'Eggs cooked in their shell by boiling them in water until the yolk and white are firm.',
            'Stir Fry' => 'A Chinese cooking technique where ingredients are cooked quickly in a hot pan or wok with a small amount of oil.',
            'Dim Sum' => 'A collection of small, bite-sized dishes served in Chinese cuisine, often steamed or fried, including dumplings, buns, and rolls.',
            'Gyoza' => 'Japanese dumplings typically filled with ground meat, vegetables, and spices, then steamed or fried.',
            'Baozi' => 'Chinese steamed buns filled with meat, vegetables, or sweet fillings.',
            'Okonomiyaki' => 'A savory Japanese pancake made from flour, eggs, shredded cabbage, and various fillings.',
            'Takoyaki' => 'A Japanese snack consisting of dough balls filled with octopus, topped with sauce and bonito flakes.',
            'Satay' => 'A dish of skewered, grilled meat, often served with peanut sauce, originating from Indonesia.',
            'Rendang' => 'A rich, slow-cooked curry from Indonesia, made with beef, coconut milk, and a variety of spices.',
            'Gado-Gado' => 'An Indonesian salad made from boiled vegetables, tofu, and hard-boiled eggs, topped with peanut sauce.',
            'Ketoprak' => 'A traditional Indonesian dish made of rice cake, tofu, and vermicelli, served with peanut sauce.',
            'Nasi Goreng' => 'Indonesian fried rice, typically served with a fried egg and various toppings like chicken, shrimp, or vegetables.',
            'Mie Goreng' => 'Indonesian fried noodles, often served with a variety of meats and vegetables.',
            'Sate Ayam' => 'Indonesian chicken satay, skewered and grilled, often served with peanut sauce.',
            'Soto Ayam' => 'A traditional Indonesian chicken soup, made with turmeric and served with rice or noodles.',
            'Bakso' => 'Indonesian meatball soup, made from beef or chicken, often served with noodles and vegetables.',
            'Pempek' => 'A traditional Indonesian fish cake, served with vinegar-based sauce.',
            'Martabak' => 'A stuffed pancake, either sweet or savory, popular in Indonesian cuisine.',
            'Kerak Telor' => 'An Indonesian traditional omelette-like dish made with sticky rice, eggs, and spices.',
            'Es Campur' => 'A mixed ice dessert from Indonesia, typically made with shaved ice, fruit, and sweet syrups.',
            'Cendol' => 'A sweet dessert made with green rice flour jelly, coconut milk, and palm sugar syrup, popular in Southeast Asia.',
            'Kolak' => 'A traditional Indonesian dessert made from bananas or sweet potatoes cooked in coconut milk and palm sugar.',
            'Pisang Goreng' => 'Fried banana, a popular snack in Indonesia, often served with sugar or honey.',
            'Singkong Goreng' => 'Fried cassava, a root vegetable often deep-fried until crispy, typically served as a snack.',
            'Ayam Penyet' => 'Indonesian smashed fried chicken, served with sambal, rice, and vegetables.',
            'Ayam Goreng' => 'Indonesian fried chicken, typically marinated with spices before being deep-fried.',
            'Lele Goreng' => 'Fried catfish, commonly served with sambal and rice.',
            'Sambal' => 'A spicy Indonesian condiment made from chili peppers, garlic, and other ingredients.',
            'Gudeg' => 'A traditional Javanese dish made from young jackfruit cooked in coconut milk and served with rice, chicken, and eggs.',
            'Rawon' => 'A rich, dark beef soup from East Java, made with keluak nuts.',
            'Sop Buntut' => 'Indonesian oxtail soup, made with beef oxtail, vegetables, and a flavorful broth.',
            'Lontong' => 'Compressed rice cakes, typically served with curry or other dishes.',
            'Ketupat' => 'Rice cakes wrapped in palm leaves, commonly served during holidays and eaten with dishes like satay or curry.'
        ];

        // Pilih menu secara acak (1 hingga 3)
        $selectedMenu = $this->faker->randomElements($menuName, $this->faker->numberBetween(1, 3));

        // Dapatkan deskripsi yang sesuai
        $description = array_map(function($menu) use ($menuDescription) {
            return $menuDescription[$menu];
        }, $selectedMenu);

        return [
            'resto_id'=> resto::factory(), 
            'menu_name' => implode(',', $this->faker->randomElements($menuName, $this->faker->numberBetween(1, 3))),
            'description' => implode(',', $description), // Pastikan deskripsi sesuai dengan menu yang dipilih
            'price' => $this->faker->numberBetween(60000, 300000),
            'image' => $this->faker->imageUrl(),
        ];
    }
}
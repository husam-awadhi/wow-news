<?php

/**
 * migrate DB
 *
 * @package  news-web
 * @author   Husam A.
 */

declare(strict_types=1);

define('APP_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Load Constants
|--------------------------------------------------------------------------
*/
require __DIR__ . '/constants.php';

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
*/
require ROOT . '/vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Migrate
|--------------------------------------------------------------------------
*/

use App\DB;
use App\Helpers;
use \Exception;

Helpers::log("Start Migration");
try {
    $db = DB::getConnection();

    //ddl 
    $db->prepare(
        "create table if not exists posts (
        `id` int(11) not null auto_increment,   
        `title` varchar(250) not null default '',       
        `article` mediumtext,     
        `synopsis`  varchar(1000) null,  
        `type` varchar(10),   
        `image` varchar(500)  null,    
        `show`  bool not null default true,
        `created_by` varchar(64) not null default '',
        `created` timestamp not null default current_timestamp,  
        `updated` timestamp not null default current_timestamp on update current_timestamp,
        primary key  (`id`))"
    )->execute();

    //dml
    $db->prepare("TRUNCATE TABLE posts")->execute();

    $db->prepare("INSERT INTO news_db.posts (title, article, synopsis, `type`, image, `show`, created_by, created, updated) VALUES ('Qui quidem earum et in et exercitationem. Ea non unde repellendus non. Error maxime ratione voluptas minus totam incidunt.', 'Voluptatem autem optio itaque nesciunt suscipit qui reiciendis. Autem suscipit et harum id aspernatur ut. Deleniti repudiandae in et dignissimos aliquid ut.', 'Iure laborum ut porro adipisci error nobis. Soluta dolor corrupti molestiae fugiat. Nesciunt dolores sapiente pariatur aut atque.', 'news', '', 1, 'Jaquan', '2021-07-04 13:03:37.000', '2021-07-04 13:03:37.000')")->execute();

    $db->prepare("INSERT INTO news_db.posts (title, article, synopsis, `type`, image, `show`, created_by, created, updated) VALUES ('Totam amet et in nisi eos. Repudiandae molestiae et quam. Ipsam sint totam maiores earum eos vel. Ipsam architecto vel explicabo voluptatem.', 'Et nulla nam temporibus ut alias qui voluptate a. Saepe cupiditate velit qui impedit quaerat qui. Repellendus neque nesciunt sequi ut.', 'Maxime quibusdam delectus qui aliquid debitis neque ea. Et eos beatae soluta deleniti. Vero aperiam vel deserunt sit sit praesentium.', 'trending', '', 1, 'Ayla', '2021-07-04 13:03:37.000', '2021-07-04 13:03:37.000')")->execute();

    $db->prepare("INSERT INTO news_db.posts (title, article, synopsis, `type`, image, `show`, created_by, created, updated) VALUES ('Quasi sed qui beatae vitae voluptatem. Error sed officiis voluptatem cupiditate earum ipsa vero. Odio eaque non error facere aut quasi.', 'Qui culpa inventore dicta sint quo. Ut numquam ut dolorum id nobis.', 'Ex dolores eveniet veniam doloribus. Rem numquam et molestias. Sit tempore aperiam aut veritatis suscipit cumque. Assumenda animi ducimus error quam est. Velit tenetur consectetur minus possimus quo.', 'trending', '', 1, 'Anibal', '2021-07-04 13:03:37.000', '2021-07-04 13:03:37.000')")->execute();

    $db->prepare("INSERT INTO news_db.posts (title, article, synopsis, `type`, image, `show`, created_by, created, updated) VALUES ('At et maiores culpa neque quo suscipit. Aut officiis id esse aspernatur. Possimus qui doloremque ut impedit officia inventore id. Debitis dolorem temporibus a sunt sit.', 'Ipsum corporis voluptatem ducimus minima dicta. Ullam voluptate iure ipsam. Exercitationem in amet nobis qui incidunt expedita consequatur. Unde numquam dolorem debitis qui.', 'Inventore perferendis non aliquid incidunt cum iste. Qui nemo cumque dolorem quod. Sint consequatur nobis hic est.', 'breaking', '', 1, 'Gabriella', '2021-07-04 13:03:37.000', '2021-07-04 13:19:28.000')")->execute();

    $db->prepare("INSERT INTO news_db.posts (title, article, synopsis, `type`, image, `show`, created_by, created, updated) VALUES ('Tenetur tempora ipsam voluptatibus porro quasi. Et aperiam temporibus similique quo est neque sapiente.', 'Laborum ratione maiores officiis quibusdam quia odit. Et omnis harum velit consequatur. Itaque quam vel itaque voluptatem ea labore.', 'Harum occaecati voluptas perferendis sunt. Nemo id dolorem quo consequatur. Debitis inventore sed sit mollitia velit.', 'news', '', 1, 'Delmer', '2021-07-04 13:03:37.000', '2021-07-04 13:19:28.000')")->execute();

    $db->prepare("INSERT INTO news_db.posts (title, article, synopsis, `type`, image, `show`, created_by, created, updated) VALUES ('Dolorem et aliquam occaecati numquam aut dolores. Omnis sit natus tenetur commodi suscipit natus in. Eligendi sint dolorum et officiis reprehenderit consectetur dolor voluptatem.', 'Necessitatibus magni qui id et pariatur. Possimus aut iure illo aut facere animi non incidunt. Eos cupiditate eos sapiente sunt debitis fugiat. Cupiditate eligendi aut ut.', 'Occaecati voluptatem aut culpa vel. Distinctio dolor nostrum corporis quia totam. Aspernatur facilis nam aut eveniet. Iusto et eos aliquid debitis enim dolorum deserunt eos.', 'breaking', '', 1, 'Nettie', '2021-07-04 13:03:37.000', '2021-07-04 13:19:28.000')")->execute();

    $db->prepare("INSERT INTO news_db.posts (title, article, synopsis, `type`, image, `show`, created_by, created, updated) VALUES ('Ut laudantium qui autem voluptas ipsam assumenda. Ducimus rerum saepe enim animi et officiis quam a. Sed est nesciunt ab molestiae.', 'Non facilis veritatis neque eligendi aliquid explicabo. Minus et nihil ut animi minima. Quas optio alias perspiciatis earum. Iure reprehenderit ratione tempore nulla deleniti quas qui.', 'Iusto unde aspernatur consequatur eum. Enim quisquam optio culpa nulla.', 'news', '', 1, 'Justus', '2021-07-04 13:03:37.000', '2021-07-04 13:19:28.000')")->execute();

    $db->prepare("INSERT INTO news_db.posts (title, article, synopsis, `type`, image, `show`, created_by, created, updated) VALUES ('Corporis porro praesentium porro omnis inventore. Laborum ut non blanditiis dolor et commodi id soluta. Et et consequatur alias eaque occaecati.', 'Voluptatem necessitatibus dignissimos officiis ullam minus. Ipsum illo voluptatem blanditiis ipsum. Non temporibus sit totam est vitae nam.', 'At ad voluptatem voluptate ut. Ea sequi at nobis ut ab vel. Debitis provident veniam et vel vero delectus enim. Ipsam repudiandae molestiae et sequi quis.', 'trending', '', 1, 'John', '2021-07-04 13:03:37.000', '2021-07-04 13:03:37.000')")->execute();

    $db->prepare("INSERT INTO news_db.posts (title, article, synopsis, `type`, image, `show`, created_by, created, updated) VALUES ('Itaque accusamus dolorem odio voluptatibus vel. Velit rem neque dolore non. Minus quia ea voluptas qui at dolorem maiores. Dolore magni consequatur beatae eum.', 'Consequuntur quibusdam non magni quasi ea. Et labore quos magni et hic velit maiores quod. Eum ipsam suscipit est veniam sunt atque. Consequatur voluptate velit dolorem libero.', 'Quas ullam debitis odio qui. Hic aut at odit. Iure hic architecto distinctio sed corrupti asperiores nisi. Laudantium temporibus et commodi sunt rerum perspiciatis.', 'trending', '', 1, 'Maegan', '2021-07-04 13:03:37.000', '2021-07-04 13:03:37.000')")->execute();

    $db->prepare("INSERT INTO news_db.posts (title, article, synopsis, `type`, image, `show`, created_by, created, updated) VALUES ('Nostrum voluptatibus sit officiis et officiis doloribus sed. Consequuntur et odit aliquam vel vero inventore. Corporis debitis occaecati accusamus ducimus soluta rerum illum.', 'Possimus sit et adipisci voluptas deleniti assumenda assumenda totam. Ullam voluptate odit pariatur et. In magni nostrum et nam aut eligendi officia. Assumenda quia dicta veritatis et ut.', 'Ut minus voluptas debitis laboriosam aut non. Omnis autem aut quis voluptas. Atque atque est qui cum sed. Beatae similique error pariatur vel quia esse voluptate. Et fugiat quasi occaecati molestias.', 'breaking', '', 1, 'Jackson', '2021-07-04 13:03:37.000', '2021-07-04 13:19:28.000')")->execute();

    $db->prepare("INSERT INTO news_db.posts (title, article, synopsis, `type`, image, `show`, created_by, created, updated) VALUES ('Iste aliquam expedita earum. Ut blanditiis sit quia omnis. Est qui nostrum consequuntur adipisci sapiente. Minima eum tenetur accusamus.', 'Rerum non corrupti eos repellat eius voluptas. Sit doloribus neque incidunt quos. Quia a iste maxime quisquam eos.', 'Velit aperiam ullam voluptatem dolorem rerum repudiandae sunt. Voluptate aut asperiores et tenetur sed. Eum aliquam voluptatibus dolores repellat similique magni voluptatem.', 'breaking', '', 1, 'Agnes', '2021-07-04 13:03:37.000', '2021-07-04 13:03:37.000')")->execute();

    $db->prepare("INSERT INTO news_db.posts (title, article, synopsis, `type`, image, `show`, created_by, created, updated) VALUES ('Aut omnis ab sed. Repudiandae ut quod occaecati odio facere. Quam et quia nemo quaerat pariatur quasi. Sit dolores quis architecto facere non dignissimos.', 'Vel nihil fugit tempora possimus et hic aut illo. Sint ipsum ipsa in aut in blanditiis. Eos officiis aut quos fugiat quo qui.', 'Qui omnis vel ut facere ducimus. Modi voluptate corporis quod mollitia repudiandae et. Et qui nihil dignissimos. Quam distinctio quae earum tempora et praesentium temporibus.', 'breaking', '', 1, 'Rupert', '2021-07-04 13:03:37.000', '2021-07-04 13:03:37.000')")->execute();

    $db->prepare("INSERT INTO news_db.posts (title, article, synopsis, `type`, image, `show`, created_by, created, updated) VALUES ('Unde illum dolorem sed vero repudiandae laborum. Aut repellendus tempore optio enim et nisi. Eum dolorem numquam quas hic.', 'Voluptas beatae qui rerum asperiores. Veniam quae magnam et nulla. Quam maxime nesciunt optio praesentium adipisci.', 'Eum temporibus sint praesentium. Commodi maiores quibusdam distinctio quasi id ad esse et. Quos cum labore adipisci ut aliquid nisi quas error.', 'breaking', '', 1, 'Flavie', '2021-07-04 13:03:37.000', '2021-07-04 13:19:28.000')")->execute();

    $db->prepare("INSERT INTO news_db.posts (title, article, synopsis, `type`, image, `show`, created_by, created, updated) VALUES ('Quaerat dolore voluptatem in quae nulla voluptatem. Labore impedit commodi explicabo excepturi sed nemo sit dolorem. Molestiae aut molestiae fugiat fugit sequi rem.', 'Dolorum nemo non amet saepe. Quo alias consequatur quia ullam consectetur architecto.', 'Et est cupiditate occaecati beatae reprehenderit et. Ut in explicabo quam hic.', 'trending', '', 1, 'Bernadette', '2021-07-04 13:03:37.000', '2021-07-04 13:03:37.000')")->execute();

    $db->prepare("INSERT INTO news_db.posts (title, article, synopsis, `type`, image, `show`, created_by, created, updated) VALUES ('Et rerum vero et ut. Aut error minima iste aut minus repudiandae molestias. Ut harum iste laborum vero adipisci quaerat. Labore non et numquam.', 'Et non possimus cum ratione. Et officiis maxime id. Dignissimos sed facilis ullam.', 'Aut odit repellat esse error cum. Sequi fuga autem provident rerum sed eius. Sed maxime odit doloremque modi voluptatem. Id aut inventore ut quis fugiat. Molestias impedit est non quam aut qui aut.', 'breaking', '', 1, 'Anya', '2021-07-04 13:03:37.000', '2021-07-04 13:19:28.000')")->execute();

    $db->prepare("INSERT INTO news_db.posts (title, article, synopsis, `type`, image, `show`, created_by, created, updated) VALUES ('Et qui non ipsam sequi consequatur esse iste aut. Voluptatum et voluptas enim nihil quis impedit. Omnis tempora sint id magnam dolor blanditiis.', 'Rem itaque sequi nobis sit. Qui voluptas veritatis iure iusto. Quibusdam voluptas consectetur et porro.', 'Id enim id non natus. Nesciunt nisi ea beatae tenetur sapiente eum recusandae pariatur. Officia quos rerum tenetur nostrum et aut expedita.', 'news', '', 1, 'Meredith', '2021-07-04 13:03:37.000', '2021-07-04 13:03:37.000')")->execute();

    $db->prepare("INSERT INTO news_db.posts (title, article, synopsis, `type`, image, `show`, created_by, created, updated) VALUES ('Repellat eum cumque magni nihil recusandae. Molestiae nesciunt pariatur maiores quidem corrupti autem sit. Quis nemo aut et quod aut modi.', 'Ut id sunt illo veritatis nisi. Sit nihil fugit ad sapiente eligendi perferendis voluptates numquam. Quis dolores deserunt nobis eum esse aperiam.', 'Nihil dolor quis iste sint aut. Qui recusandae aliquam omnis recusandae. Est quos quibusdam ullam nulla rerum est accusamus. Illo et numquam magni doloremque voluptas molestias.', 'breaking', '', 1, 'Marcelle', '2021-07-04 13:03:37.000', '2021-07-04 13:03:37.000')")->execute();

    $db->prepare("INSERT INTO news_db.posts (title, article, synopsis, `type`, image, `show`, created_by, created, updated) VALUES ('Omnis aut aspernatur vel. Hic voluptatibus et et qui cupiditate ducimus repellat. Ipsa nobis labore temporibus non eveniet sed. Iure eveniet est unde quasi magni aspernatur eos dolorem.', 'Placeat placeat et consequatur suscipit quisquam illum necessitatibus. Adipisci voluptatem et vel nesciunt. Qui accusantium quae ea et.', 'Et sapiente laboriosam qui iure atque consequuntur ea. Officia voluptates autem temporibus qui magnam tempora vel. Repellendus voluptatem laudantium quis qui mollitia sed modi.', 'news', '', 1, 'Josephine', '2021-07-04 13:03:37.000', '2021-07-04 13:03:37.000')")->execute();

    $db->prepare("INSERT INTO news_db.posts (title, article, synopsis, `type`, image, `show`, created_by, created, updated) VALUES ('Aliquid et laudantium illum rerum cum. Ut eius ipsa consequatur enim suscipit voluptatibus. Nemo sint incidunt consequuntur cumque autem minima. Repudiandae explicabo minus repellat ea.', 'Maiores ab cupiditate eaque deserunt. Illo saepe possimus minima tempore unde quaerat fugiat eos. Dolor aut harum unde tempora numquam.', 'Necessitatibus et quasi repellat eius. Quidem eos nostrum aut deleniti vel. Et id porro laboriosam eaque tempora.', 'news', '', 1, 'Flossie', '2021-07-04 13:03:37.000', '2021-07-04 13:03:37.000')")->execute();

    $db->prepare("INSERT INTO news_db.posts (title, article, synopsis, `type`, image, `show`, created_by, created, updated) VALUES ('Delectus rerum eos nihil sed. Quaerat sequi qui voluptates ducimus a non qui corrupti. Incidunt ipsa corrupti ut debitis.', 'Vitae architecto ipsa exercitationem quia aut eos eos voluptas. Sequi explicabo qui totam autem nostrum mollitia saepe aliquid. Rerum voluptatibus atque rerum nisi. Nostrum vel dolores nobis aut ut cumque molestias. Quas quo dolorem voluptate soluta et adipisci inventore illum.', 'Ut alias dignissimos dolorem ducimus sit assumenda impedit rerum. Fugiat iusto voluptatem ipsam voluptate. Ut earum et ipsa minima. Sed possimus laudantium et sed consectetur optio quis quisquam.', 'breaking', '', 1, 'Gladyce', '2021-07-04 13:03:37.000', '2021-07-04 13:19:28.000')")->execute();

    //done

} catch (Exception $e) {
    Helpers::log("migration error - {$e->getMessage()}");
}

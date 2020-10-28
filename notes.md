1. $user = User::find(1)
   [!] Aliasing 'User' to 'App\Models\User' for this Tinker session.
   => App\Models\User {#4081
        id: 1,
        name: "Ali Doe",
        email: "ali@gmail.com",
        image: null,
        company: null,
        location: null,
        story: null,
        email_verified_at: null,
        created_at: "2020-10-26 16:37:48",
        updated_at: "2020-10-26 16:37:48",
        deleted_at: null,
      }
   >>> $user->follows()->get()
   BadMethodCallException with message 'Call to undefined method App/Models/User::follows()'
   >>> $user->followers()->get()
   => Illuminate\Database\Eloquent\Collection {#4225
        all: [
          App\Models\User {#3288
            id: 2,
            name: "Henk Doe",
            email: "henk@gmail.com",
            image: null,
            company: null,
            location: null,
            story: null,
            email_verified_at: null,
            created_at: "2020-10-26 16:41:13",
            updated_at: "2020-10-26 16:41:13",
            deleted_at: null,
            pivot: Illuminate\Database\Eloquent\Relations\Pivot {#3977
              following_id: 1,
              follower_id: 2,
            },
          },
        ],
      }
   $user->following()->get()
   => Illuminate\Database\Eloquent\Collection {#4232
        all: [
          App\Models\User {#4226
            id: 3,
            name: "Tim Doe",
            email: "tim@gmail.com",
            image: null,
            company: null,
            location: null,
            story: null,
            email_verified_at: null,
            created_at: "2020-10-26 16:58:35",
            updated_at: "2020-10-26 16:58:35",
            deleted_at: null,
            pivot: Illuminate\Database\Eloquent\Relations\Pivot {#4228
              follower_id: 1,
              following_id: 3,
            },
          },
          App\Models\User {#4231
            id: 2,
            name: "Henk Doe",
            email: "henk@gmail.com",
            image: null,
            company: null,
            location: null,
            story: null,
            email_verified_at: null,
            created_at: "2020-10-26 16:41:13",
            updated_at: "2020-10-26 16:41:13",
            deleted_at: null,
            pivot: Illuminate\Database\Eloquent\Relations\Pivot {#3609
              follower_id: 1,
              following_id: 2,
            },
          },
        ],
      }
   $user->posts
       => Illuminate\Database\Eloquent\Collection {#3292
            all: [
              App\Models\Post {#4014
                id: 1,
                user_id: 1,
                title: "Lorem Ipsum",
                subtitle: "Waarom gebruiken we het?",
                body: "In tegenstelling tot wat algemeen aangenomen wordt is Lorem Ipsum niet zomaar willekeurige tekst. het heeft zijn wortels in een stuk klassieke latijnse literatuur uit 45 v.Chr. en is dus meer dan 2000 jaar oud. Richard McClintock, een professor latijn aan de Hampden-Sydney College in Virginia, heeft één van de meer obscure latijnse woorden, consectetur, uit een Lorem Ipsum passage opgezocht, en heeft tijdens het zoeken naar het woord in de klassieke literatuur de onverdachte bron ontdekt. Lorem Ipsum komt uit de secties 1.10.32 en 1.10.33 van "de Finibus Bonorum et Malorum" (De uitersten van goed en kwaad) door Cicero, geschreven in 45 v.Chr. Dit boek is een verhandeling over de theorie der ethiek, erg populair tijdens de renaissance. De eerste regel van Lorem Ipsum, "Lorem ipsum dolor sit amet..", komt uit een zin in sectie 1.10.32.",
                image: "uploads/dDAUM3C5TGKrtmF7wkr9qzQTbNGRRquDuxk7tq3D.jpeg",
                created_at: "2020-10-26 19:00:59",
                updated_at: "2020-10-26 19:00:59",
                deleted_at: null,
              },
            ],
          }
       >>> 
2. $post->isLikedBy($user->fresh())   ****eager loading, ******fresh instance
3.

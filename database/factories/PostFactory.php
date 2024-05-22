// database/factories/PostFactory.php
namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'content' => $this->faker->paragraph(5), // Use 'content' instead of 'body'
            'user_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}

<?php
namespace App\GraphQL\Types;

use App\Models\Game;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class GameType extends GraphQLType
{
    protected $attributes = [
        'name'          => 'Game',
        'description'   => 'Video game',
        // Note: only necessary if you use `SelectFields`
        'model'         => Game::class,
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'The id of the game',
            ],
            'title' => [
                'type' => Type::string(),
                'description' => 'Game title',
            ],
            'done' => [
                'type' => Type::boolean(),
                'description' => 'is the game finished',
                'selectable' => false, // Does not try to query this from the database
            ],
            'category' => [
                'type' => Type::string(),
                'description' => 'Game category',
            ],
        ];
    }

    // You can also resolve a field by declaring a method in the class
    // with the following format resolve[FIELD_NAME]Field()
    protected function resolveEmailField($root, array $args)
    {
        return strtolower($root->email);
    }
}

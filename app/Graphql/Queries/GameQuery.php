<?php
namespace App\GraphQL\Queries;

use Closure;
use App\Models\Game;
use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;

class GameQuery extends Query
{
    protected $attributes = [
        'name' => 'Game',
    ];

    public function type(): Type
    {
        return Type::nonNull(Type::nonNull(GraphQL::type('Games')));
    }

    public function args(): array
    {
        return [
            'id'=> [
                'name' => 'id',
                'type' => Type::int(),
                'rules' => ['required']
            ],
        ];
    }

    public function resolve($root, $args)
    {
        return Game::findOrFail($args['id']);
    }
}

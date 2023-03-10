<?php
namespace App\GraphQL\Queries;

use Closure;
use App\Models\Game;
use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;

class GamesQuery extends Query
{
protected $attributes = [
'name' => 'Games',
];

public function type(): Type
{
return Type::nonNull(Type::listOf(Type::nonNull(GraphQL::type('Game'))));
}


public function resolve($root, array $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
{
return Game::all();
}
}

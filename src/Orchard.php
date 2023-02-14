<?php

class Orchard
{
    protected array $orchard;

    public function __construct(array $orchard = [])
    {
        $this->orchard = $orchard;
    }

    public function plant(FruitTree $tree)
    {
        $this->orchard[] = $tree;
    }

    public function harvest()
    {
        $storage = [];

        foreach($this->orchard as $tree)
        {   
            $treeClass = get_class($tree);
            if(!isset($storage[$treeClass]))
            {
                $storage[$treeClass] = [];
            }
            array_push($storage[$treeClass], ...$tree->harvest());
        }

        foreach($storage as $treeClass => $fruits)
        {   
            $storage[$treeClass]['weight'] = $this->calculateWeight($fruits);
        }
        return $storage;
    }

    protected function calculateWeight(array $fruits)
    {
        $weight = 0;
        foreach($fruits as $fruit)
        {
            $weight += $fruit->getWeight();
        }
        return $weight;
    }

    public function getOrchard()
    {
        return $this->orchard;
    }
}
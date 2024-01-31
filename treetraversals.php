<?php


$root = [
    'value' => 4,
    'children' => [
        [
            'value' => 2,
            'children' => [
                ['value' => 1],
                ['value' => 3],
            ],
        ],
        [
            'value' => 6,
            'children' => [
                ['value' => 5],
                ['value' => 7],
            ],
        ],
    ]
];
function visit(array $node): int
{
    return $node['value'];
}
function preorderTraversal(array $node) {
    $output[] = visit($node);
    
        echo $node['value'] . " ";

        foreach ($node['children'] ?? [] as $child) {
            $output[] = preorderTraversal($child);
        }
     
        return implode(', ', $output);
    }
      
    function searchInTree(array $node, $targetValue) {
        if ($node['value'] == $targetValue) {
            return true; 
        }
    
        foreach ($node['children'] ?? [] as $child) {
            if (searchInTree($child, $targetValue)) {
                return true; // Target value found in one of the children
            }
        }
    
        return false; // Target value not found in the current subtree
    }
    $targetValue=5;
    $srch=searchInTree($root,$targetValue);
    if($srch){
        echo "element found in tree <br>";
    }
    else{
        echo "element not found";
    }
 
$res=preorderTraversal($root);
echo "<br>". $res;
?>
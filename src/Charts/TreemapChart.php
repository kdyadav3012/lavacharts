<?php

namespace Khill\Lavacharts\Charts;

/**
 * TreeMap Chart Class
 *
 *
 * A visual representation of a data tree, where each node can have zero or more
 * children, and one parent (except for the root, which has no parents). Each
 * node is displayed as a rectangle, sized and colored according to values that
 * you assign. Sizes and colors are valued relative to all other nodes in the
 * graph. You can specify how many levels to display simultaneously, and
 * optionally to display deeper levels in a hinted fashion. If a node is a leaf
 * node, you can specify a size and color; if it is not a leaf, it will be
 * displayed as a bounding box for leaf nodes. The default behavior is to move
 * down the tree when a user left-clicks a node, and to move back up the tree
 * when a user right-clicks the graph.
 *
 * The total size of the graph is determined by the size of the containing
 * element that you insert in your page. If you have leaf nodes with names too
 * long to show, the name will be truncated with an ellipsis (...).
 *
 * @package    Khill\Lavacharts
 * @subpackage Charts
 * @since      3.0.1
 * @author     Kevin Hill <kevinkhill@gmail.com>
 * @copyright  (c) 2015, KHill Designs
 * @link       http://github.com/kevinkhill/lavacharts GitHub Repository Page
 * @link       http://lavacharts.com                   Official Docs Site
 * @license    http://opensource.org/licenses/MIT MIT
 */
class TreemapChart extends Chart
{
    /**
     * Javascript chart type.
     *
     * @var string
     */
    const TYPE = 'TreemapChart';

    /**
     * Javascript chart version.
     *
     * @var string
     */
    const VERSION = '1';

    /**
     * Javascript chart package.
     *
     * @var string
     */
    const VIZ_PACKAGE = 'treemap';

    /**
     * Google's visualization class name.
     *
     * @var string
     */
    const VIZ_CLASS = 'google.visualization.TreeMap';
}

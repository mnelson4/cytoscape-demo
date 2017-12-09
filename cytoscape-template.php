<h1>Demo Cytoscape Graph</h1>
<div class="cytoscape" id="cytoscape">
</div>

<script>
    jQuery(document).ready(function(){
        var cy = cytoscape({
            container: jQuery('#cytoscape'),
            wheelSensitivity:.1,
            elements: [ // list of graph elements to start with
                { // node a
                    data: { id: 'john', classes: 'person' }
                },
                { // node b
                    data: { id: 'mary', classes: 'person' }
                },
                { //marriage of john and mary
                    data: { id: 'john-mary', classes: 'union' }
                },
                { // edge ab
                    data: { id: 'john-john-mary', source: 'john', target: 'john-mary' }
                },
                {
                    data: { id: 'mary-john-mary', source: 'mary', target: 'john-mary' }
                }
            ],

            style: [ // the stylesheet for the graph
                {
                    selector: 'node.union',
                    style: {
                        'background-color': '#666',
                        'label':'union'
                    }
                },

                {
                    selector: 'edge',
                    style: {
                        'width': 3,
                        'line-color': '#ccc',
                        'target-arrow-color': '#ccc',
                        'target-arrow-shape': 'triangle',
                        'curve-style':'segments'
                    }
                },
                {
                    selector: 'node',
                    style: {
                        'background-color': '#111',
                        'label': 'data(id)'
                    }
                }
            ],

            layout: {
                name: 'breadthfirst'
            }
        });
    });
</script>
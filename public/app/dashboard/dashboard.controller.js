(function () {
    'use strict';

    angular.module('app')
        .controller('DashboardCtrl', ['$scope', DashboardCtrl])

    function DashboardCtrl($scope) {

        var colorPrimaryLight = '#449DD5';
        var colorSuccessLight = '#78D6C7';

        $scope.bar1 = {};
        $scope.pie2 = {};
        $scope.line3 = {};

        $scope.bar1.options = {
            tooltip : {
                trigger: 'axis'
            },
            legend: {
                data:['Evaporation','Precipitation']
            },
            toolbox: {
                show : false
            },
            calculable : true,
            xAxis : [
                {
                    type : 'category',
                    data : ['Jan.','Feb.','Mar.','Apr.','May','Jun.','Jul.','Aug.','Sep.','Oct.','Nov.','Dec.']
                }
            ],
            yAxis : [
                {
                    type : 'value'
                }
            ],
            series : [
                {
                    name:'Evaporation',
                    type:'bar',
                    data:[2.0, 4.9, 7.0, 23.2, 25.6, 76.7, 135.6, 162.2, 32.6, 20.0, 6.4, 3.3],
                    itemStyle: {
                        normal: {
                            color: colorPrimaryLight
                        }
                    },
                    markPoint : {
                        data : [
                            {type : 'max', name: 'Max'},
                            {type : 'min', name: 'Min'}
                        ]
                    },
                    markLine : {
                        data : [
                            {type : 'average', name: 'Average'}
                        ]
                    }
                },
                {
                    name:'Precipitation',
                    type:'bar',
                    data:[2.6, 5.9, 9.0, 26.4, 28.7, 70.7, 175.6, 182.2, 48.7, 18.8, 6.0, 2.3],
                    itemStyle: {
                        normal: {
                            color: colorSuccessLight
                        }
                    },
                    markPoint : {
                        data : [
                            {name : 'Highest', value : 182.2, xAxis: 7, yAxis: 183, symbolSize:18},
                            {name : 'Lowest', value : 2.3, xAxis: 11, yAxis: 3}
                        ]
                    },
                    markLine : {
                        data : [
                            {type : 'average', name : 'Average'}
                        ]
                    }
                }
            ]
        };
        $scope.pie2.options = {
            title : {
                text: 'Traffic Source',
                x:'center'
            },
            tooltip : {
                trigger: 'item',
                formatter: "{a} <br/>{b} : {c} ({d}%)"
            },
            legend: {
                orient : 'vertical',
                x : 'left',
                data:['Direct','Email','Affiliate','Video Ads','Search']
            },
            toolbox: {
                show : false,
            },
            calculable : true,
            series : [
                {
                    name:'Traffic source',
                    type:'pie',
                    radius : ['50%', '70%'],
                    itemStyle : {
                        normal : {
                            label : {
                                show : false
                            },
                            labelLine : {
                                show : false
                            }
                        },
                        emphasis : {
                            label : {
                                show : true,
                                position : 'center',
                                textStyle : {
                                    fontSize : '30',
                                    fontWeight : 'bold'
                                }
                            }
                        }
                    },
                    data:[
                        {value:335, name:'Direct', itemStyle:{normal:{color: '#42A4BB'}}},
                        {value:310, name:'Email', itemStyle:{normal:{color: '#5BC0C4'}}},
                        {value:234, name:'Affiliate', itemStyle:{normal:{color: '#78D6C7'}}},
                        {value:135, name:'Video Ads', itemStyle:{normal:{color: '#176799'}}},
                        {value:1548, name:'Search', itemStyle:{normal:{color: '#2F87B0'}}}
                    ]
                }
            ]
        };
        $scope.line3.options = {
            title : {
                text: 'Sales',
            },
            tooltip : {
                trigger: 'axis'
            },
            legend: {
                data:['Pre-order','Deal closed']
            },
            toolbox: {
                show : false
            },
            calculable : true,
            xAxis : [
                {
                    type : 'category',
                    boundaryGap : false,
                    data : ['Mon.','Tue.','Wed.','Thu.','Fri.','Sat.','Sun.']
                }
            ],
            yAxis : [
                {
                    type : 'value'
                }
            ],
            series : [
                {
                    name:'Deal closed',
                    type:'line',
                    smooth:true,
                    itemStyle:{normal:{color: colorSuccessLight, borderColor: colorSuccessLight}},
                    areaStyle: {normal: {color: colorSuccessLight}},
                    data:[10, 12, 21, 54, 260, 830, 710]
                },

                {
                    name:'Pre-order',
                    type:'line',
                    smooth:true,
                    itemStyle:{normal:{color: colorPrimaryLight, borderColor: colorPrimaryLight}},
                    areaStyle: {normal: {color: colorPrimaryLight}},
                    data:[1320, 1132, 601, 234, 120, 90, 20]
                }
            ]
        };
    }


})(); 
<template>

    <div class="c">



        <div class="col-md-4 py-3">
            <table class="table table-striped">
                <tr>
                    <td>Inverter Size:</td>
                    <td style="text-align: right;"></td>
                    <td style="width: 100px; text-align: right;" class="h4">{{ (inverter_size * 1.5)/1000 }} kW</td>
                </tr>
                <tr>
                    <td>Number of Batteries:<br>

                        Select size:
                        <select v-model="sel_bat_size" id="" class="form-control">
                            <option :value="'225'">225Ah 12V</option>
                            <option :value="'200'">200Ah 12V</option>
                            <option :value="'51'">51Ah 48V</option>

                        </select>~
                    </td>

                    <td style="text-align: right;" class="h4">{{night_load}}</td>

                    <td style="width: 100px; text-align: right;" class="h4">{{ batteries }}</td>
                </tr>
                <tr>
                    <td>Number of Solar Panels:<br>

                        Select size:
                        <select v-model="sel_solar_size" id="" @change="select_solar" class="form-control">
                            <option :value="'280'">280W</option>
                            <option :value="'410'">410W</option>
                            <option :value="'460'">460W</option>
                            <option :value="'550'">550W</option>

                        </select>
                    </td>
                    <td style="text-align: right;" class="h4">{{night_load + day_load}} Wh</td>

                    <td style="width: 100px; text-align: right;" class="h4">{{ panels }}</td>
                </tr>
            </table>

            <div class="containe py-2">
                <button class="btn btn-primary" @click="analyze(sel_bat_size, sel_solar_size)">Calculate</button>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Load</th>
                    <th>Quantity</th>
                    <th>Max. Power (W)</th>
                    <th>Avg. Day Hours (H)</th>
                    <th>Avg. Night Hours (H)</th>
                    <th>Avg. Day Energy Consumption (Wh)</th>
                    <th>Avg. Night Energy Consumption (Wh)</th>
                    <th></th>

                </tr>
            </thead>

            <tbody>

                <tr v-for="(query, index) in queries" :key="query.id">
                    <td>1</td>
                    <td>
                        <input type="text" class="form-control" v-model="query.load">
                    </td>
                    <td>
                        <input type="number" class="form-control" style="width: 80px;" v-model="query.quantity"
                            @input="updateTotalDayEnergy(query)">
                    </td>

                    <td>
                        <input type="number" class="form-control" v-model="query.max_power"
                            @input="updateTotalDayEnergy(query)">

                    </td>

                    <td>
                        <input type="number" class="form-control" v-model="query.day_hours"
                            @input="updateTotalDayEnergy(query)">

                    </td>
                    <td>
                        <input type="number" class="form-control" v-model="query.night_hours"
                            @input="updateTotalNightEnergy(query)">

                    </td>
                    <td>
                        <input type="number" class="form-control" v-model="query.total_day_energy">

                    </td>
                    <td>
                        <input type="number" class="form-control" v-model="query.total_night_energy">

                    </td>

                    <td>
                        <button class="btn btn-danger" @click="removeLoad(index)">remove</button>
                    </td>


                </tr>
            </tbody>
        </table>

        <div class="container py-3 text-center">

            <button class="btn btn-primary" @click="addLoad()">Add Load</button>

        </div>
    </div>



</template>

<script>
export default {

    data() {
        return {

            inverter_size: 0,
            night_load: 0,
            day_load: 0,
            batteries: 0,
            panels: 0,
            sel_solar_size:'460',
            sel_bat_size:'225',
            queries: [{
                load: 'Light Bulbs',
                quantity: 10,
                max_power: 5,
                day_hours: 2,
                night_hours: 12,
                total_day_energy: 100,
                total_night_energy: 600
            }],
        }
    },
    methods: {

        analyze(battery_unit, solar_unit) {

            //alert(battery_unit)
            const keyToSum = 'max_power';
            const _night = 'total_night_energy';
            const _day = 'total_day_energy';
            const _quantity = 'quantity';



            // Initialize sum
            let sum = 0;
            let sum_night = 0;
            let sum_day = 0;



            // Loop through the array and calculate the sum
            for (let i = 0; i < this.queries.length; i++) {
                sum += parseFloat(this.queries[i][keyToSum] * this.queries[i][_quantity]);


            }

            this.inverter_size = Math.round(sum);

            for (let i = 0; i < this.queries.length; i++) {
                sum_night += parseFloat(this.queries[i][_night]);
            }

            this.night_load = sum_night;

            for (let i = 0; i < this.queries.length; i++) {
                sum_day += parseFloat(this.queries[i][_day]);
            }

            this.day_load = (sum_day);

            let _total_req = this.day_load + this.night_load

            this.batteries = Math.round(this.night_load/(battery_unit * 12));

            this.panels = Math.round((_total_req/8)/solar_unit);

        },
        removeLoad(index){

            this.queries.splice(index, 1);



        },
        select_solar(){
            return this.sel_bat_size;
        },
        addLoad() {
            this.queries.push({
                load: 'Example Load',
                quantity: 10,
                max_power: 0,
                day_hours: 0,
                night_hours: 0,
                total_day_energy: 0,
                total_night_energy: 0
            });

            console.log(this.queries)
        },

        calculateTotalDayEnergy(query) {
            return query.quantity * query.max_power * query.day_hours;
        },

        calculateTotalNightEnergy(query) {
            return query.quantity * query.max_power * query.night_hours;

        },
        updateTotalDayEnergy(query) {
            query.total_day_energy = query.quantity * query.max_power * query.day_hours;
            this.updateTotalNightEnergy(query)
        },
        updateTotalNightEnergy(query) {
            query.total_night_energy = query.quantity * query.max_power * query.night_hours;
            this.updateTotalDayEnergy(query)
        },
    },

}
</script>

    rf.StandaloneDashboard (function (db) {
    db.setDashboardTitle ("Submited Sites");
    var site_subs = new ChartComponent();
    site_subs.setDimensions (4,3);
    site_subs.setCaption ("Sites submissions");
    site_subs.lock();

    $.get("logstatus.php", function(data) {
        var labels = [], sites_data = [];
        for(var i = 0; i < data.length; i++) {
            labels.push (data[i]["site"]);
            sites_data.push (parseInt(data[i]["total_sites"]));
        }
        site_subs.setLabels (labels);
        site_subs.addSeries ("sites", "Total Sites", sites_data, {
            numberPrefix: "$"
        });
        site_subs.unlock();
    });
    db.addComponent (site_subs);
});

$.get("site_subs.php", function(data) {
        var labels = [], sites_data = [];
        for(var i = 0; i < data.length; i++) {
            labels.push (data[i]["site"]);
            sites_data.push (parseInt(data[i]["total_sites"]));
        }
        site_subs.setLabels (labels);
        site_subs.addSeries ("sites", "Total Sites", sites_data, {
            numberPrefix: "$"
        });
        site_subs.unlock();
    });
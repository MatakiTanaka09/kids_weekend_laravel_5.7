export default {
    imageTitleFormatDate: function(date) {
        return date.split(":").slice(null,-1).join(":")
    },
    eventTimeFormatDate: function(date) {
        const day = (new Date(date)).getDay();
        let [dayTime, time] = date.toString().split(" ")
        dayTime = dayTime.split("-")
        time = time.split(":")
        const dayNames = ['日', '月', '火', '水', '木', '金', '土'];
        const [year, started_at] = [
            dayTime[1] + "月" + dayTime[2] + "日",
            "(" + dayNames[day] + ")"
        ]
        return [year, started_at].join(" ")
    },
    customFormat(date){
        let d = date;
        const year = d.getFullYear()
        const month = d.getMonth() + 1
        const day = d.getDate()
        return d = year + "年" + month + "月" + day + "日"
    },
    searchDateCalendar(date) {
        let d = date;
        const year  = d.getFullYear();
        const month = d.getMonth() + 1;
        const day   = d.getDate();
        return d = year + '-' + month + '-' + day
    }
}

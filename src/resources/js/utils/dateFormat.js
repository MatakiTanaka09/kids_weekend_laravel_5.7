export default {
    imageTitleFormatDate: function(date) {
        return date.split(":").slice(null,-1).join(":")
    },
    eventTimeFormatDate: function(date) {
        let [dayTime, time] = date.toString().split(" ")
        dayTime = dayTime.split("-")
        time = time.split(":")
        const [year, started_at] = [
            dayTime[0] + "年" + dayTime[1] + "月" + dayTime[2] + "日",
            time[0] + "時" + time[1] + "分"
        ]
        return [year, started_at].join(" ")
    },
    customformat(value){
        const year = value.getFullYear()
        const month = value.getMonth() + 1
        const date = value.getDate()
        return year + "年" + month + "月" + date + "日"
    }
}

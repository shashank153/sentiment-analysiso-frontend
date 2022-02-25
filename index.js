const express = require('express')
const bodyParser = require('body-parser')
const cors = require('cors')
const path = require('path/posix')
const port = process.env.PORT || 3031

const app = express()

const staticPath = path.join(__dirname + "/public")

app.use(express.static(staticPath))

app.get('/', (req, res) => {
    res.sendFile(path.join(staticPath, 'index.html'))
})


app.listen(port, (req, res) => {
    console.log("Sentiment analysis frontend is running at: http://localhost:" + port);
})